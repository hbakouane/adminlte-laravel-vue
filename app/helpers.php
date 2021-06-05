<?php

use App\Models\Section;
use App\Models\User;
use Illuminate\Support\Facades\DB;

if (! function_exists('getUserInfos')) {
    function getUserInfos($id = null) {
        // This method will return all the information from all tables about the authenticated user
        $id = $id ?? auth()->id();
        return User::where('id', $id)->first();
    }
}

if (! function_exists('getAllSectionsNames')) {
    function getAllSectionsNames() {
        $contact = Section::groupBy('name');
        return $contact->pluck('name');
    }
}

if (! function_exists('getAllSections')) {
    function getAllSections() {
        return DB::table('sections')->get();
    }
}

if (! function_exists('currentSubscription')) {
    function currentSubscription() {
        return auth()->user()->subscriptions()->first();
    }
}