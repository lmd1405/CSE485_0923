<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>

<div class="main-content vh-100 p-3">
  <div class="m-5">
    <a href="{{route('authors.create')}}" class="btn btn-success"><i class="bi bi-person-add"></i>Add</a>
  </div>
  <div >
      <table class="table">
          <thead>
             <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Show</th>
                <th scope="col">edit</th>
                <th scope="col">Delete</th>
             </tr>
          </thead>
          <tbody>
          <?php foreach($authors as $item){?>
             <tr>
                <th><?php echo $item->id;?></th>
                <th><?php echo $item->name;?></th>
                <th><a class="btn btn-primary" href="{{route('authors.show',$item)}}">show</a></th>              
                <th><a class="btn btn-primary" href="{{route('authors.edit', $item)}}">edit</a></th>
                <th>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$item->id}}">
                        Delete
                    </button>
                    <!--Modal-->
                    <div class="modal fade" id="deleteModal-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLable" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete Confirmation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this author?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <form action="{{route('authors.destroy', $item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="sumbit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </th>

              </tr>
              <?php } ?>
          </tbody>
      </table>
  </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>