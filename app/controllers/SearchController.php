<?php

class SearchController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        // Search is a static function which is written in ImageModel
        $result = ImageModel::search();
        // return $result;

        return View::make('pages.results')
                   ->with('results',$result);
	}
	public function getInstantSearch()
	{


			$search_word = str_ireplace(' ', '-', Input::get('q'));
			$image_match = ImageModel::where('slug', 'like', '%'.$search_word.'%')
							   		 ->take(5)
                                     ->distinct()
							   		 ->orderBy('id', 'desc')
							   		 ->select('slug')
							   		 ->get();

			return Response::json($image_match,200);
	}
}