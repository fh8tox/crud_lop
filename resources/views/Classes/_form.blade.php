<form action="{{ isset($class) ? route('classes.update', $class->id) : route('classes.store') }}" method="POST">
    @csrf
    @if(isset($class))
        @method('PUT')
    @endif

    <div class="mb-2">
        <label>Tên lớp</label>
        <input type="text" name="name"
            value="{{ old('name', $class->name ?? '') }}"
            class="form-control">
    </div>

    <div class="mb-2">
        <label>Khoa</label>
        <select name="department_id" class="form-control">
            @foreach($departments as $d)
                <option value="{{ $d->id }}"
                    {{ (isset($class) && $class->department_id == $d->id) ? 'selected' : '' }}>
                    {{ $d->name }}
                </option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-success">
        {{ isset($class) ? 'Cập nhật' : 'Thêm mới' }}
    </button>
</form>