<html>
<body>
<form action="{{ route('contacts') }}" method="POST">
     @csrf
      <div class="form-row">
        <div class="col">
          <input type="text" name="firstname" class="form-control" placeholder="firstname">
        </div>
        <div class="col">
          <input type="text" name="lastname" class="form-control" placeholder="lastname">
        </div>
      </div>
      <div class="form-row">
        <div class="col">
          <input type="number" name="telephone" class="form-control" placeholder="telephone">
        </div>
        <div class="col">
          <input type="email" name="email" class="form-control" placeholder="email">
        </div>
      </div>
      <input type="submit" value="Submit!" >
    </form>
</div>
</body>
</html>