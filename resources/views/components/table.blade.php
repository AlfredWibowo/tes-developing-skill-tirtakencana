<div class="table-responsive">
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    <table class="table table-bordered table-stripped table-hover text-center">
        <thead>
            <tr>
                @foreach ($columns as $column)
                    <th>{{ $column['label'] }}</th>
                @endforeach

                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rows as $row)
                <tr>
                    @foreach ($columns as $column)
                        <td>{{ $row[$column['field']] }}</td>
                    @endforeach

                    <td>
                        <a href="{{ route($route . 'edit', ['param' => $row[$columns[0]['field']]]) }}"
                            class="btn btn-warning"><i class="fas fa-edit"></i></a>

                        <form class="d-inline"
                            action="{{ route($route . 'destroy', ['param' => $row[$columns[0]['field']]]) }}"
                            method="post">
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash"></i></a>
                            </button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
