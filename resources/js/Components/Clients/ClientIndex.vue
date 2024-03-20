<template>
    <div>
      <input type="text" v-model="search" placeholder="Search clients..." @input="searchClients">
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="client in filteredClients" :key="client.id">
            <td>{{ client.name }}</td>
            <td>{{ client.address }}</td>
            <td>{{ client.phone }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        clients: [],
        search: ''
      };
    },
    computed: {
      filteredClients() {
        return this.clients.filter(client => {
          return client.name.toLowerCase().includes(this.search.toLowerCase()) ||
                 client.address.toLowerCase().includes(this.search.toLowerCase()) ||
                 client.phone.includes(this.search);
        });
      }
    },
    methods: {
      async getClients() {
        try {
          const response = await axios.get('/api/clients'); // Adjust endpoint as per your API route
          this.clients = response.data;
        } catch (error) {
          console.error('Error fetching clients:', error);
        }
      },
      searchClients() {
        // Fetch clients from the server based on search query
        // You can choose to debounce the search request to reduce unnecessary API calls
        // For simplicity, we're fetching all clients and filtering them client-side
        // However, for large datasets, consider implementing server-side search
      }
    },
    mounted() {
      this.getClients();
    }
  };
  </script>
  