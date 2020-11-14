<template>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card" v-if='$gate.isAdmin()'>
          <div class="card-header">
            <h3 class="card-title">Hover Data Table</h3>
            <div class="card-tools">
              <button @click.prevent="newUser" class="btn btn-success">Add new</button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div
              id="example2_wrapper"
              class="dataTables_wrapper container-fluid dt-bootstrap4"
            >
              <div class="row">
                <div class="col-sm-12 col-md-6"></div>
                <div class="col-sm-12 col-md-6"></div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <table
                    id="example2"
                    class="table table-bordered table-hover dataTable"
                    role="grid"
                    aria-describedby="example2_info"
                  >
                    <thead>
                      <tr role="row">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Register At</th>
                        <th>Modify</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr  role="row" v-for="data in users.data" :key="data.id">
                        <td class="sorting_1">{{data.id}}</td>
                        <td>{{data.name | strToUpper}}</td>
                        <td>{{data.email}}</td>
                        <td>{{data.type}}</td>
                        <td>{{data.created_at | formatDate}}</td>
                        <td>
                          <a @click.prevent="editUser(data)" href="#">Edit </a>/
                          <a @click.prevent="deleteUser(data)" href=""> Delete</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-sm-12 col-md-7">
                  <div
                    class="dataTables_paginate paging_simple_numbers"
                    id="example2_paginate"
                  >
                    <ul class="pagination">
                      <li
                        class="paginate_button page-item previous" :class="cp == 1 ? 'disabled': ''"
                        id="example2_previous"
                      >
                        <a
                          @click.prevent='cp = cp == 1 ? cp : cp-1'
                          href="#"
                          aria-controls="example2"
                          data-dt-idx="0"
                          tabindex="0"
                          class="page-link"
                          >Previous</a
                        >
                      </li>
                      <li v-for="i in users.last_page" :key="i" class="paginate_button page-item" :class="i == cp ? 'active': ''">
                        <a @click.prevent="cp = i"
                          href="#"
                          aria-controls="example2"
                          data-dt-idx="1"
                          tabindex="0"
                          class="page-link"
                          >{{i}}</a
                        >
                      </li>
                     
                      <li
                        class="paginate_button page-item next"
                        id="example2_next"
                        :class="cp == users.last_page ? 'disabled': ''"
                      >
                        <a @click.prevent='cp = cp == users.last_page ? cp : cp+1'
                          href="#"
                          aria-controls="example2"
                          data-dt-idx="7"
                          tabindex="0"
                          class="page-link"
                          >Next</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>



    <!-- Modal -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form @submit.prevent="!editMode ?  createUser() : updateUser() ">
                <div class="form-group">
                <label for="Name">Name</label>
                <input v-model="form.name"
                  type="text"
                  class="form-control"
                  id="Name"
                  placeholder="Name"
                />
                <small v-if="errors.name"  class="form-text text-danger"
                  > <div v-for="(e,index) in errors.name" :key='index'>
                        {{e}}
                      </div> 
                </small>

                
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input v-model="form.email"
                  type="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                  placeholder="Enter email"
                />
                <small v-if="errors.email"  class="form-text text-danger"
                  > <div v-for="(e,index) in errors.email" :key='index'>
                        {{e}}
                      </div> 
                </small>
              </div>
              
              <div class="from-group">
                  <textarea v-model="form.bio" name="" class="form-control" id="" cols="30" rows="5" placeholder="Short bio"></textarea>
              </div>
              <div class="form-group">
                <label for="Name">Type</label>
                <select v-model="form.type" name="" id="" class="form-control">
                    <option value="admin">Admin</option>
                    <option selected value="user">User</option>
                    <option value="author">Author</option>
                </select>
                <small v-if="errors.type"  class="form-text text-danger"
                  > <div v-for="(e,index) in errors.type" :key='index'>
                        {{e}}
                      </div> 
                </small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input v-model="form.password"
                  type="password"
                  class="form-control"
                  id="exampleInputPassword1"
                  placeholder="Password"
                />
                <small v-if="errors.password"  class="form-text text-danger"
                  > <div v-for="(e,index) in errors.password" :key='index'>
                        {{e}}
                      </div> 
                </small>
              </div>
              
              <button type="submit" class="btn btn-primary">{{editMode ? 'Update' : 'Create'}}</button>
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    data(){
        return {
            cp: 1,
            editMode: false,
            form: {},
            errors:{},
            users: {},

        }
    },
    watch: {
    cp(){
      this.loadUser();
       
    }
  },
    methods: {
      deleteUser(e){        
            if(confirm("Do you really want to delete?")){
              axios.delete('/api/users/'+e.id)
              .then(resp => {
                this.loadUser();
                toastr['success'](e.name + '  Deleted Successfully')
              })
               .catch(error => {
                    toastr['error'](error.response.data.message);

               })
           }
      },
        newUser(){
            this.editMode = false;
            this.form = {};
            this.errors = {};
            $('#exampleModal').modal('show');
        },
        editUser(e){
            this.editMode = true;
            this.form = e;
            this.errors = {};
            $('#exampleModal').modal('show');
        },
        loadUser(){
            axios.get('/api/users?page='+ this.cp).then(({data}) => {
             this.users = data;
        })
        },
        updateUser(){
            console.log('update')
            axios.put('/api/users/'+ this.form.id, {
               ...this.form
           }).then(response => {
               this.loadUser();
               $('#exampleModal').modal('hide')
               this.editMode = false;
               toastr["success"]("User Updated");
           }).catch(e => {
               this.errors =e.response.data.errors
           })
           
        },
        createUser(){
            console.log('create')
           axios.post('/api/users', {
               ...this.form
           }).then(response => {
               this.loadUser();
               $('#exampleModal').modal('hide')
               toastr["success"]("User Created");
           }).catch(e => {
               this.errors =e.response.data.errors
           })
        },
    },
  mounted() {
    this.loadUser();
  },
};
</script>
