<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabla</title>
</head>
<body>
    <style>
        .text{text-align: center;}
    </style>
    <div id="tabla">
        <table border="1">
            <tbody>
            <tr>
                <th class="text">Código de hotel</th>
                <th class="text">Marca</th>
                <th class="text">Etiqueta de hotel</th>
            </tr>
            <tr v-for="dato in datos">
                <td class="text">{{dato.label}}</td>
                <td class="text">{{ dato.marca }}</td>
                <td class="text">{{ dato.codigo}}</td>
            </tr>
            </tbody>
        </table>
    </div>
    <script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
    <script src="https://unpkg.com/axios@0.17.1/dist/axios.min.js"></script>
    <script>
        new Vue({
            el: '#tabla',
            data:{
                datos: []
            },
            methods: {
                getDatos: function() {
                    axios.get('autocomplete.json'). then(response => {
                        this.datos = response.data
                    })
                }
            },
                mounted: function (){
                    this.getDatos()
                }
        })
    </script>
</body>
</html>