<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Package;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $viewData;


    public function slug($slug = null)
    {
        $slug = $slug ? $slug : 'index';
        $file_path = resource_path() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'website/pages' . DIRECTORY_SEPARATOR . $slug . '.blade.php';
        $this->viewData['slug'] = $slug;
        $this->viewData['data'] = Package::all();
        if (file_exists($file_path)) {
            switch ($slug) {
                case 'index':
                    break;

                case 'about':

                    break;

                case 'bod':

                    break;


                case 'contact':

                    break;

                case 'my-booking':
                    $this->viewData['bookings'] = Booking::where('user_id', auth()->user()->id)->latest()->paginate(10);
                    break;
                default:
                    return view('website.pages.' . $slug,  $this->viewData);
                break;
            }
            return view('website.pages.' . $slug,  $this->viewData);
        }
        return view('website.pages.404');
    }
}
