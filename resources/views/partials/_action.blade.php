<div class="btn-group" role="group">
    <form action="{{ $url_destroy }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
        @csrf
        @method('DELETE')
        <a href="{{ $url_edit }}" class="btn btn-primary btn-sm">
            <i class="fa fa-edit"></i>
        </a>
        <button type="submit" class="btn btn-danger btn-sm">
            <i class="fa fa-trash"></i>
        </button>
    </form>
</div>
