@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
    <div class="app-title">
        <div class="mb-3">
            <h1><i class="fa fa fa-user"></i> {{ $pageTitle }}</h1>
            <p>{{ $subTitle }} </p>
        </div>
        <div>
{{--            <a href="{{ route('admin.users.export') }}" class="btn btn-primary pull-right mb-1">Экспортировать в excel</a>--}}
            <a href="{{ route('admin.users.export-poster') }}" class="btn btn-primary pull-right mb-1">Экспортировать пользователей постера</a>
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary pull-right mb-1">Добавить пользователя</a>
        </div>

    </div>
    @include('admin.partials.flash')
    <div class="row">
        <div class="col-md-12">
            <div class="tile" style="overflow-y:auto">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th > # </th>
                            <th> Имя </th>
                            <th > Телефон </th>
                            <th > Почта </th>
                            <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($records as $record)

                                <tr>
                                    <td  >{{ $record->id }}</td>
                                    <td>{{ !empty($record->name) ? $record->name : 'Не указано'  }}</td>
                                    <td>{{ $record->phone }}</td>
                                    <td>{{ $record->email }}</td>




                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Second group">
                                            <a href="{{ route('admin.users.edit', $record->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('admin.users.delete', $record->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')

@endpush
