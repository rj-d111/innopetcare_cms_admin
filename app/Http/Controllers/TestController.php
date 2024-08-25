<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;

class TestController extends Controller
{
    public function index()
    {
        $factory = (new Factory)->withServiceAccount(__DIR__,'/firebase_credential.json');
        $firestore =$factory->createFirestore();
        $database= $firestore->database();
        $testRef = $database->collection('TestUsers')->newDocument();
        $testRef->set([
            'firstName' => 'Test',
            'lastName' => 'User',
            'Age' => '11',
        ]);
    }
}
