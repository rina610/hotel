<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <a href='{{route('categories.create')}}' class = "btn btn-primary mb-3"> Добавить категорию </a>
    </div>
    @foreach
    @csrf
    @method('DELETE')
    @foreach ($categories as $category)
<tr> <td> {{$category->id}} </td> <td>{{$category->title}}</td> <td> {{$category-> slug}}</td>
<td> <a href=" {{route ('categories.edit', ['category'=>$category->id])}}" class="btn btn-info btn-sm foat-left mr-1"><i class="fas fa-pencil-alt"></i></a>
<form action=" {{route ('categories.destroy', ['category'=>$category->id])}}" method="post" class = "float-left"> @csrf @method('DELETE')
<button type="submit" class = "btn btn-danger btn-sm" onclick="return confirm ('Подтвердите удаление') ">
<i class="fas fa-trash-alt"></i>
</button>
</form>
</td>
</tr> @endforeach
</body>
</html>