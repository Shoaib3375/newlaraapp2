<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller {
    // function DemoAction(): string {
    //     return "Hello from abc123";
    // }
    // function DemoAction2(): string {
    //     return "Hello2 from redirect";
    // }
    // function DemoAction3(): string {
    //     return "Hello3 from redirect";
    // }
    // function DemoAction4(): string {
    //     return "Hello4 from redirect";
    // }
    function DemoAction(Request $request): array{
        return $request->header();
    }
}
