<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Form5</title>
  </head>
  <body>

    <div class="container my-5">
        <h1>Send Email</h1>

        @include('forms.error')

        <form action="{{ route('form5') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" placeholder="Name" class="form-control" value="{{ old('name') }}" />
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}" />
            </div>

            <div class="mb-3">
                <label>Subject</label>
                <input type="text" name="subject" placeholder="Subject" class="form-control" value="{{ old('subject') }}" />
            </div>

            {{ old('subject_type') }}

{{-- if( old('subject_type') == 'Normal') {
    echo 'checked'
}else {
    echo ''
} --}}
            <div class="mb-3">
                <label>Subject Type</label><br>
                <label><input {{ (old('subject_type') == 'Normal') ? 'checked' : '' }} type="radio" name="subject_type" value="Normal" /> Normal</label><br>
                <label><input {{ (old('subject_type') == 'Special') ? 'checked' : '' }} type="radio" name="subject_type" value="Special" /> Special</label>
            </div>

{{-- @dump(old('hoppies')) --}}

            <div class="mb-3">
                <label>Your Hoppies</label><br>
                <label><input {{ ( !is_null(old('hoppies')) && in_array('Football', old('hoppies'))) ? 'checked' : '' }} type="checkbox" value="Football" name="hoppies[]" /> Football</label><br>
                <label><input {{ (!is_null(old('hoppies')) && in_array('Vollyball', old('hoppies'))) ? 'checked' : '' }} type="checkbox" value="Vollyball" name="hoppies[]" /> Vollyball</label><br>
                <label><input {{ (!is_null(old('hoppies')) && in_array('Cooding', old('hoppies'))) ? 'checked' : '' }} type="checkbox" value="Cooding" name="hoppies[]" /> Cooding</label>
            </div>

            <div class="mb-3">
                <label>Your Study</label><br>
                <select name="study" class="form-control form-select">
                    <option {{ (old('study') == 'Diplome') ? 'selected' : '' }} value="Diplome">Diplome</option>
                    <option {{ (old('study') == 'Bacholer') ? 'selected' : '' }} value="Bacholer">Bacholer</option>
                    <option {{ (old('study') == 'Master') ? 'selected' : '' }} value="Master">Master</option>
                    <option {{ (old('study') == 'PHD') ? 'selected' : '' }} value="PHD">PHD</option>
                    <option {{ (old('study') == 'Prof') ? 'selected' : '' }} value="Prof">Prof</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Message</label>
                <textarea  name="message" placeholder="Message" class="form-control" rows="5">{{ old('message') }}</textarea>
            </div>

            <div class="mb-3">
                <label>CV</label>
                <input type="file" name="cv" class="form-control" />
            </div>

            <button class="btn btn-dark px-5">Send</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
