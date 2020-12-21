import Vue from 'vue';
import axios from 'axios';

const app = new Vue({

    el: '#app',

    data: {
        cds: [],
    },

    created() {

        // Make a request for a user with a given ID
        axios.get('http://localhost/php-ajax-dischi/src/scripts/json-scripts.php')
        .then( response => {
            // handle success
            console.log(response.data);
            this.cds = response.data;
        })
        .catch( error => {
            // handle error
            console.log(error);
        });
    }
});