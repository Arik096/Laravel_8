<div>
    <section style="padding-top: 30px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>File Uploader</h3>
                            @if (Session()->has('sms'))
                            <p class="text-success">{{Session('sms')}}</p>
                            @endif
                        </div>
                        <div class="card-body">
                           <form wire:submit.prevent="fileUpload()" id="form-upload" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" wire:model="title">
                                @error('title')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="filename">File</label>
                                <input type="file" name="filename" id="filename" class="form-control" wire:model="filename">
                                @error('filename')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div style="padding: 10px">
                                </div><button type="submit" class="btn btn-success">Upload</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
