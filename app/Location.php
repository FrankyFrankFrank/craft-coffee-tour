<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

use App\LocationImage;

class Location extends Model
{
    public function podcasts()
    {
    	return $this->hasOne('App\Podcast');
    }

    public function images()
    {	
		$filenames = collect(Storage::disk('s3')->files($this->shortname . '/orig'));

		$images = $filenames->map(function($filename) {
			return Storage::disk('s3')->url($filename);
		});

		return $images;
    }

    public function thumbs()
    {
        $filenames = collect(Storage::disk('s3')->files($this->shortname . '/thumb'));

        $thumbs = $filenames->map(function($filename) {
            return Storage::disk('s3')->url($filename);
        });

        return $thumbs;
    }
}
