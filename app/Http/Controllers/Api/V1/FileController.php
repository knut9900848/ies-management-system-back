<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreFileRequest;
use App\Http\Requests\UpdateFileRequest;
use App\Models\Api\V1\File;
use App\http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
use Image as InterventionImage;

class FileController extends Controller
{
    public function singleImageUpload(Request $request)
    {
        $request->validate([
            "files" => "required",
            "files.*" => "mimes:jpeg,jpg,png|max:5120"
          ]);

        foreach ($request->file('files') as $attachedFile) {
            $model = 'App\\Models\\Api\\v1\\' . $request->model;
            $object = $model::findOrFail($request->modelId);


            if ($object->files->count()) {
                foreach ($object->files as $file) {
                    Storage::disk($request->storage)->delete($file->name);
                    $file->delete();
                }
            }

            $originFileName = $attachedFile->getClientOriginalName();

            $filename = pathinfo($originFileName, PATHINFO_FILENAME);
            $extension = pathinfo($originFileName, PATHINFO_EXTENSION);

            $newFilename = uniqid();
            $mime_type = $attachedFile->getClientMimeType();

            $resizedImage = InterventionImage::make($attachedFile);
            $resizedImage->resize(200, 200);

            $resizedImagePath = Storage::disk($request->storage)->path($newFilename);
            $resizedImage->save($resizedImagePath);

            $file = new File;
            $file->name = $newFilename;
            $file->origin_name = $filename;
            $file->extension = $extension;
            $file->mime_type = $mime_type;
            $file->fileable_type = $model;
            $file->fileable_id = $request->modelId;
            $file->save();

            $object->image = $file->name;
            $object->save();

            $modelObject = $model::findOrFail($request->modelId);
            $files = $modelObject->files;
        }

        return response()->json([
            'image' => $file->name
        ]);

        // return response()->json([
        //     "success" => true,
        //     "showMessage" => false,
        //     "message" => "File uploaded successfully.",
        //     "files" => $files,
        // ]);
    }
}
