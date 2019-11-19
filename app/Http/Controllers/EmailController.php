<?php

namespace App\Http\Controllers;

use App\Post;
use App\Email;

use App\Http\Requests\EmailRequest;
use App\Http\Requests\PostRequest;
class EmailController extends Controller
{

    public function getForm()
	{
		return view('home');
	}
	public function postForm(EmailRequest $request)
	{
		// dd($request);
		$email = new Email;
		$email->email = $request->input('email');
		$email->save();
		
		return view('email_ok');
	}
	public function techForm(PostRequest $request)
	{
		// dd($request);
		$post = new Post;
		$post->nom = $request->input('nom');
		$post->prenom = $request->input('prenom');
		$post->service = $request->input('service');
		$post->numero = $request->input('numero');
		$post->texte = $request->input('texte');
		$post->save();
		
		return view('email_ok');
	}



}