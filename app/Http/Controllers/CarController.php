<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CarImage;

class CarController extends Controller
{

    public function index()
    {
        $cars = Car::with('carImages')->get();
        // echo '<pre>';
        // print_r($cars->toArray());
        // die;
        return view('cars.index', compact('cars'));
    }


    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'car_name' => 'required',
            'price' => 'required|numeric',
            'top_speed' => 'required|numeric',
            'car_images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // determine the car type based on the top speed
        if ($request->top_speed < 100) {
            $carType = 'Normal Car';
        } elseif ($request->top_speed < 200) {
            $carType = 'Luxury Car';
        } else {
            $carType = 'Sports Car';
        }

        $car = new Car();
        $car->name = $request->car_name;
        $car->type = $carType;
        $car->price = $request->price;
        $car->top_speed = $request->top_speed;
        $car->save();

        if($car)
        {
            if ($request->hasFile('car_images')) {
                $images = $request->file('car_images');
                foreach ($images as $image) {
                    $name = time() . '_' . $image->getClientOriginalName();
                    $path = $image->storeAs('uploads/cars', $name, 'public');
                    // $image->move(public_path('/uploads/cars'), $name);
                    $car_image = new CarImage();
                    $car_image->car_id  = $car->id;
                    $car_image->image_path = $path;
                    $car_image->save();
                }
            }
        }

        return redirect()->route('view_car')
            ->with('success','Car added successfully.');
    }
}
