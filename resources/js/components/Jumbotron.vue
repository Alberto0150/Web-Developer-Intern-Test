<template>
    <div>
        <b-jumbotron header="Mari Berkarya Bagi Indonesia" lead="Berdedikasi sepenuh hati bersama kami">
            <div class="search-wrapper">
                <input type="text" v-model="searchString" placeholder="Cari judul pekerjaan..."/>
            </div>
            <ul>
                <li v-for="result in results" :key="result.id">{{result.label}}</li>
            </ul>
        </b-jumbotron>
    </div>
</template>