@extends('layouts.admin')
@section('content')
@can('pasien_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.pasiens.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.pasien.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.pasien.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Pasien">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.pasien.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.pasien.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.pasien.fields.gender') }}
                        </th>
                        <th>
                            {{ trans('cruds.pasien.fields.umur') }}
                        </th>
                        <th>
                            {{ trans('cruds.pasien.fields.penyakit') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pasiens as $key => $pasien)
                        <tr data-entry-id="{{ $pasien->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $pasien->id ?? '' }}
                            </td>
                            <td>
                                {{ $pasien->name ?? '' }}
                            </td>
                            <td>
                                {{ $pasien->gender ?? '' }}
                            </td>
                            <td>
                                {{ $pasien->umur ?? '' }}
                            </td>
                            <td>
                                {{ $pasien->penyakit ?? '' }}
                            </td>
                            <td>
                                @can('pasien_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.pasiens.show', $pasien->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('pasien_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.pasiens.edit', $pasien->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('pasien_delete')
                                    <form action="{{ route('admin.pasiens.destroy', $pasien->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('pasien_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.pasiens.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Pasien:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection