<?php

namespace App\Http\Controllers\Blade;

use App\Http\Requests\Blade\StoreBladeAttachmentRequest;
use App\Models\FormSubmission;

class BugDemoController
{
    public function ok()
    {
        return view('uploads.bug-demo.ok')
            ->with(['partial' => 'Hello from partial']);
    }

    public function bug() 
    {
        return view('uploads.bug-demo.bug')
                ->with(['partial' => 'Hello from partial']);
    }
}
