<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Parameter;
use App\Models\CategoryParameter;
use App\Models\Type;
use App\Models\Subcategory;
use App\Models\SubcategoryParameter;
use App\Http\Requests;
use DB;

class AdministratorController extends Controller
{
    public function index(){ return View('administrator.index');}
    public function index2(){ return View('administrator.index2');}
    public function index3(){ return View('administrator.index3');}
    public function form(){  return View('administrator.form'); }
    public function form_advanced(){  return View('administrator.form_advanced'); }
    public function form_buttons(){  return View('administrator.form_buttons'); }
    public function form_upload(){  return View('administrator.form_upload'); }
    public function form_validation(){  return View('administrator.form_validation'); }
    public function form_wizzard(){  return View('administrator.form_wizzard'); }
    public function general_elements(){  return View('administrator.general_elements'); }
    public function media_gallery(){ return View('administrator.media_gallery');}
    public function typography(){  return View('administrator.typography'); }
    public function icons(){  return View('administrator.icons'); }
    public function glyphicons(){  return View('administrator.glyphicons'); }
    public function widgets(){  return View('administrator.widgets'); }
    public function invoice(){  return View('administrator.invoice'); }
    public function inbox(){  return View('administrator.inbox'); }
    public function calendar(){  return View('administrator.calendar'); }
    public function tables(){  return View('administrator.tables'); }
    public function tables_dynamic(){  return View('administrator.tables_dynamic'); }
    public function chartjs(){  return View('administrator.chartjs'); }
    public function chartjs2(){  return View('administrator.chartjs2'); }
    public function echartjs(){  return View('administrator.echartjs'); }
    public function morisjs(){  return View('administrator..morisjs'); }
    public function other_charts(){  return View('administrator.other_charts'); }
    public function contacts(){  return View('administrator.contacts'); }
    public function ecommerce(){  return View('administrator.ecommerce'); }
    public function profile(){  return View('administrator.profile'); }
    public function projects(){  return View('administrator.projects'); }
    public function project_detail(){  return View('administrator.project_detail'); }
    public function login(){  return View('administrator.login'); }
    public function page_404(){  return View('administrator.page_404'); }
    public function page_500(){  return View('administrator.page_500'); }
    public function plain_page(){  return View('administrator.plain_page'); }
    public function pricing_tables(){  return View('administrator.pricing_tables'); }
}
