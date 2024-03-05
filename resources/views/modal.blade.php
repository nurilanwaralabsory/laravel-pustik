<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/borrower" method="POST">
                <div class="modal-body">
                    @method('POST')
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="name">
                        <input hidden type="text" name="user_id" value="{{ auth()->user()->id }}">
                        <input hidden type="text" name="book_id" value="{{ $book->id }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Phone number</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="phone_number">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Address</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="address">
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
