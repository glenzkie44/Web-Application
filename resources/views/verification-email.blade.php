<div class="container">
    
    <h1>Web Application</h1>
<hr>
    <div>
    <h3>Welcome {{$user->name}}!</h3>

    <p>
        You are now registered to our website. Click the link below 
        for verification
    </p>
<hr>
    <a href="{{url('/verification/' . $user->id . '/' . $user->remember_token)}}">
        Click here to verify
    </a>
</div>