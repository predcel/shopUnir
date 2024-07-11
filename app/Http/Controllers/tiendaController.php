<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;



class tiendaController extends Controller
{
    //
    public function iniciaCarrito()
    {
        if (!is_null(Cookie::get('carrito'))) {
            $carrito = Cookie::get('carrito');
        } else {
            $carrito = 0;
        }

        return $carrito;
    }

    public function iniciaCarritoProductos()
    {
        if (!is_null(Cookie::get('carritoDetalle'))) {
            $carrito = json_decode(Cookie::get('carritoDetalle'));
        } else {
            $carrito = array();
        }

        return json_encode($carrito);
    }

    public function productos($id)
    {
        switch ($id) {
            case 1:
                $data = [
                    'imagenes' => ['carbon 00.png', 'carbon 01.png', 'carbon 02.png'],
                    'nombre' => 'Casco carbon',
                    'precio' => 3999
                ];
                break;
            case 2:
                $data = [
                    'imagenes' => ['jet 00.png', 'jet 01.png', 'jet 02.png'],
                    'nombre' => 'Casco jet',
                    'precio' => 2499
                ];
                break;
            case 3:
                $data = [
                    'imagenes' => ['playera 00.png', 'playera 01.png', 'playera 02.png'],
                    'nombre' => 'Playera Fox',
                    'precio' => 1299
                ];
                break;
            case 4:
                $data = [
                    'imagenes' => ['maleta 00.png', 'maleta 01.png', 'maleta 02.png'],
                    'nombre' => 'Maleta',
                    'precio' => 7899
                ];
                break;

            default:
                $data = [
                    'imagenes' => ['storeshop.jpeg', 'storeshop.jpeg', 'storeshop.jpeg'],
                    'nombre' => 'Producto no encontrado',
                    'precio' => 0
                ];
                break;
        }
        $data['identificador'] = $id;
        return $data;
    }

    public function welcome()
    {
        $carrito = self::iniciaCarrito();
        $carritoD = self::iniciaCarritoProductos();
        return response(view('welcome', ['carrito' => $carrito]))
            ->cookie('carrito', $carrito, 60)
            ->cookie('carritoDetalle', $carritoD, 60);
    }

    public function muestraProducto($producto)
    {
        $carrito = self::iniciaCarrito();
        $carritoD = self::iniciaCarritoProductos();
        $producto = self::productos($producto);
        return response(view('productoDetalle', ['carrito' => $carrito, 'producto' => $producto]))
            ->cookie('carrito', $carrito, 60)
            ->cookie('carritoDetalle', $carritoD, 60);
    }

    public function sumaValues($cantidad, $identificador)
    {
        $carrito = self::iniciaCarrito();
        $carritoDetalle = json_decode(self::iniciaCarritoProductos());

        $carrito = $carrito + $cantidad;
        for ($i = 0; $i < $cantidad; $i++) {
            array_push($carritoDetalle, $identificador);
        }

        return ['carrito' => $carrito, 'carritoDetalle' => $carritoDetalle];
    }

    public function agregaCookies(Request $request)
    {
        $attributes = $request->all();
        $carroCookies = self::sumaValues(intval($attributes['cantidad']), $attributes['id']);

        $carrito = $carroCookies['carrito'];
        $carritoDetalle = $carroCookies['carritoDetalle'];

        return response()->json([$carrito, $carritoDetalle])
            ->cookie('carrito', $carrito, 60)
            ->cookie('carritoDetalle', json_encode($carritoDetalle), 60);
    }

    public function agregaYPaga(Request $request)
    {
        $attributes = $request->all();
        $carroCookies = self::sumaValues(intval($attributes['cantidadO']), $attributes['identificadorO']);
        $carrito = $carroCookies['carrito'];
        $carritoDetalle = $carroCookies['carritoDetalle'];
        // $cantidadXProducto = array_count_values($carroCookies['carritoDetalle']);

        // foreach ($cantidadXProducto as $key => $value) {
        //     $productosData[$key] = self::productos($key);
        // }

        // return response(view('listadoPago', [
        //     'carrito' => $carrito,
        //     'producto' => $carritoDetalle,
        //     'productosData' => $productosData,
        //     'cantidadXProducto' => $cantidadXProducto
        // ]))
        //     ->cookie('carrito', $carrito, 60)
        //     ->cookie('carritoDetalle', json_encode($carritoDetalle), 60);
        return response(redirect('pagar'))
            ->cookie('carrito', $carrito, 60)
            ->cookie('carritoDetalle', json_encode($carritoDetalle), 60);
    }

    public function borraCarrito()
    {
        $carrito = 0;
        $carritoDetalle = array();
        ;

        return response(redirect()->route('home'))
            ->cookie('carrito', $carrito, 60)
            ->cookie('carritoDetalle', json_encode($carritoDetalle), 60);
    }

    public function goNosotros()
    {
        return view('nosotros', [
            'carrito' => self::iniciaCarrito(),
        ]);
    }

    public function goContacto()
    {
        return view('contacto', [
            'carrito' => self::iniciaCarrito(),
        ]);
    }

    public function goPago()
    {
        $carrito = self::iniciaCarrito();
        $carritoDetalle = json_decode(self::iniciaCarritoProductos());
        $cantidadXProducto = array_count_values($carritoDetalle);

        if (empty($cantidadXProducto)) {
            $productosData = array();
        } else {
            foreach ($cantidadXProducto as $key => $value) {
                $productosData[$key] = self::productos($key);
            }
        }

        return response(view('listadoPago', [
            'carrito' => $carrito,
            'producto' => $carritoDetalle,
            'productosData' => $productosData,
            'cantidadXProducto' => $cantidadXProducto
        ]))
            ->cookie('carrito', $carrito, 60)
            ->cookie('carritoDetalle', json_encode($carritoDetalle), 60);
    }

    public function goVideos()
    {
        return view('videos', [
            'carrito' => self::iniciaCarrito(),
        ]);
    }
}

