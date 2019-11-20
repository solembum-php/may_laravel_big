@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Все задачи</div>

                <div class="panel-body">
		    <!-- Текущие задачи -->
		    @if (count($tasks) > 0)
		    <div class="panel panel-default">
			<div class="panel-heading">
			    {{trans('tasks.template.all_tasks')}}
			</div>
			<div class="panel-body">
			    <form action="{{route('tasks.create')}}" method="post">
				{{ csrf_field() }}
				{{ method_field('GET') }}
				<button><i class="fa fa-plus"></i>Создать задачу</button>
			    </form>
			    <table class="table table-striped task-table">
				<!-- Заголовок таблицы -->
				<thead>
				    <tr>
					<th>{{trans('tasks.template.task')}}</th>
					<th>{{trans('tasks.template.action')}}</th>
				    </tr>
				</thead>
				<!-- Тело таблицы -->
				<tbody>
				    @foreach ($tasks as $task)
				    <tr>
					<!-- Имя задачи -->
					<td class="table-text">
					    <div>{{ $task->name }}</div>
					</td>
					<td style="display: flex">
					    <form action="{{route('tasks.destroy',$task->id)}}" method="post">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						<button><i class="fa fa-trash"></i></button>
					    </form>
					    <form action="{{route('tasks.edit',$task->id)}}" method="post">
						{{ csrf_field() }}
						{{ method_field('GET') }}
						<button><i class="fa fa-edit"></i></button>
					    </form>
					</td>
				    </tr>
				    @endforeach
				</tbody>
			    </table>
			</div>
		    </div>
		    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
