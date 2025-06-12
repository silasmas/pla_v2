<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsletterRequest;
use App\Http\Requests\UpdateNewsletterRequest;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{

    public function subscribe(Request $request)
    {
        // 1. Validation du JSON envoyé
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:newsletters,email',
        ], [
            'email.required' => __('info.footer.msgErrEmail'),
            'email.email'    => __('info.footer.msgErrFormatEmail'),
            'email.unique'   => __('info.footer.msgErrEmail2'),
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => __('info.footer.msgErr'),
                'errors'  => $validator->errors(),
            ], 422);
        }
        try {
            // 2. Création de l’abonné (vous pouvez aussi envoyer une confirmation ou ajouter à un service externe)
            Newsletter::create([
                'email'         => $request->input('email'),
                'subscribed_at' => now(),
            ]);

            // 3. Réponse JSON en cas de succès
            return response()->json([
                'message' => __('info.footer.msgSuccess'),
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => __('info.footer.msgException'),
            ], 500);
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsletterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsletterRequest $request, Newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Newsletter $newsletter)
    {
        //
    }
}
