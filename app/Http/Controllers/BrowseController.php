<?php

namespace App\Http\Controllers;

use Grimzy\LaravelMysqlSpatial\Types\LineString;
use Grimzy\LaravelMysqlSpatial\Types\Polygon;
use Illuminate\Http\Request;
use App\Models\Filter;
use App\Models\Listing;
use App\Models\Category;
use App\Models\User;
use Grimzy\LaravelMysqlSpatial\Types\Point;
use Setting;
use MetaTag;
use GeoIP;

class BrowseController extends Controller
{
	...
}