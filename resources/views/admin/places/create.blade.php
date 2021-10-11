@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-5">Create New Lunch Meeting</h1>

        
        
        <div class="row">
            <div class="col-md-8 offset-md-2">
               
                <form action="{{ route('admin.place.store') }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label for="title" class="form-label">Name Restaurant*</label>
                        <input type="text" class="form-control" name="title" id="title">
                        @error('title')
                            <div class="feedback text-danger"> {{ $message }} </div>
                        @enderror    
                    </div>

                    <div class="mb-3">
                        <label for="day_id">Date*</label>
                        <select class="form-control" name="day_id" id="day_id">
                            <option value="">-- Select --</option>
                            @foreach ($days as $day)
                                <option value="{{ $day->id }}">{{ $day->name }}</option>
                            @endforeach
                        </select>
                        @error('day_id')
                            <div class="feedback text-danger"> {{ $message }} </div>
                        @enderror 
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Note</label>
                        <textarea class="form-control" name="content" id="content" rows="6"></textarea>
                    </div>

                    <button class="btn btn-primary" type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection