new Vue({
    el: '#title',
    data:{
        title: 'Welcome to Vue added V-For'
    }
})

 new Vue({
    el: '#playlist-div',
    data:{
        newArtist:'',
        newTitle:'',
        playlist: [

        ]
    },
    methods:{
        addSong(){
            this.playlist.push({"artist": this.newArtist,"title": this.newTitle});
            console.log(this.playlist);
        },
        removeSong(){
            this.playlist.pop();
            console.log(this.playlist);
        }
    }
})
