<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreAttachmentRequest;
use App\Http\Requests\UpdateAttachmentRequest;
use App\Models\Api\V1\Attachment;

class AttachmentController extends Controller
{
    public function attachFile(Request $request)
    {
        $request->validate([
            "files" => "required",
            "files.*" => "mimes:jpeg,jpg,png|max:5120"
          ]);

        foreach ($request->file('selectedFiles') as $attachedFile) {
        $model = 'App\\Models\\Api\\v1\\' . $request->model;

        $originFileName = $attachedFile->getClientOriginalName();

        $filename = pathinfo($originFileName, PATHINFO_FILENAME);
        $extension = pathinfo($originFileName, PATHINFO_EXTENSION);

        $newFilename = uniqid();
        $mime_type = $attachedFile->getClientMimeType();

        Storage::disk('files')->putFileAs("/", $attachedFile, $newFilename);

        $file = new File;
        $file->name = $newFilename;
        $file->origin_name = $filename;
        $file->extension = $extension;
        $file->mime_type = $mime_type;
        $file->fileable_type = $model;
        $file->fileable_id = $request->modelId;
        $file->save();
        }

        $modelObject = $model::findOrFail($request->modelId);
        $files = $modelObject->files;

        return response()->json([
        "success" => true,
        "message" => "File uploaded successfully.",
        "files" => $files,
        ]);
    }
}
