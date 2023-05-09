<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo  List</title>
</head>
<body>
    <div id="app">
        <div class="container bg-primary align-items-center justify-content-center">
            <header>
                <h1 class="text-center fs-1 bold text-white">{{title}}</h1>
                <p class="fs-3 text-center bold text-white">Cose da fare oggi. Non procrastinare e DO DO DO!</p>
            </header>
            <main>
            <div class="row">
                <div class="col">
                    <div class="input-group w-75 ms-2">
                        <input @keyup.enter="updateList" type="text" v-model="todoItem" class="form-control ms-2" name="" id="">
                        <button class="btn btn-success ms-2" id="button-add" @click="updateList">Aggiungi</button>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="col d-flex flex-wrap">
                    <div v-for="(todo,index) in todoList"  :class="todo.todo.done ? 'alert alert-success text-decoration-line-through done': ''"@click="toggleTaskDone(index)" class="p-1 text-center fs-6 m-3 card card-title w-25" v-if="todoList.length > 0">
                        <p class="fs-3 text-center bold text-primary" > {{todo.todo}}</p>
                        <button @click.stop="deleteItem(index)" class="btn btn-outline-danger bg-danger text-black m-2">Cancella</button>
                    </div>
                    <h1 v-else class="text-center fs-1 bold text-white m-5 text-center">La lista è vuota</h1>
                </div>
            </div>
            </main>
            <footer class="text-end">
                <h5 class="text-white">Made with &hearts; by Classe92</h5>
            </footer>
    </div>


    <script src='./js/script.js'></script>

</body>
</html>