const { createApp } = Vue;


createApp({
  data() {
    return {
      title: "To Do List ",
      todoList: [],
      apiUrl: "server.php",
      todoItem: "",
    };
  },
  methods: {
    readList() {
      axios.get(this.apiUrl).then((res) => {
        this.todoList = res.data;
      });
    },
    updateList() {
      const data = {
        todoItem: this.todoItem
      };
      axios.post(this.apiUrl, data, { headers: { "Content-Type": "multipart/form-data" },
        })
        .then((res) => {
          this.todoList = res.data;
          this.todoItem = "";
        });
    },
    deleteItem(index) {
      this.todoList.splice(index, 1);
    },
    toggleTaskDone(index) {
        const data = {
            updateList: index
          };
          axios.post(this.apiUrl, data, { headers: { "Content-Type": "multipart/form-data" },
            })
            .then((res) => {
              this.todoList = res.data;
              this.todoItem = "";
            });
    },
  },
  mounted() {
    this.readList();
  },
}).mount("#app");