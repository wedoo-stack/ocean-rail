<div class="newsletter">
    <div class="container">

    <form action="/submit-newsletter" method="POST">
        @csrf
     <div class="mb-3">
     <label for="email" class="form-label">Email address</label>
     <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
     </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    </div>
</div>
