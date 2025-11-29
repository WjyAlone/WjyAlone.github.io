document.addEventListener('DOMContentLoaded', function() {
    const musicPlayer = {
        audio: new Audio(),
        isPlaying: false,
        currentIndex: 0,
        songs: [
            'music/song1.mp3'
        ],
        
        init() {
            this.setupElements();
            this.loadSong(0);
            this.audio.play().then(() => {
                this.isPlaying = true;
            }).catch(() => {
                console.log('需要用户交互才能自动播放');
            });
        },
        
        setupElements() {
            document.getElementById('playPauseBtn').onclick = (e) => {
                e.stopPropagation();
                this.togglePlay();
            };
            
            document.getElementById('nextBtn').onclick = (e) => {
                e.stopPropagation();
                this.nextSong();
            };
            
            this.audio.onended = () => this.nextSong();
            this.audio.onloadedmetadata = () => this.updateInfo();
        },
        
        togglePlay() {
            if (this.isPlaying) {
                this.audio.pause();
                document.getElementById('playPauseBtn').textContent = '▶';
            } else {
                this.audio.play();
                document.getElementById('playPauseBtn').textContent = '❚❚';
            }
            this.isPlaying = !this.isPlaying;
        },
        
        async nextSong() {
            this.currentIndex = (this.currentIndex + 1) % this.songs.length;
            await this.loadSong(this.currentIndex);
            if (this.isPlaying) this.audio.play();
        },
        
        async loadSong(index) {
            this.audio.src = this.songs[index];
            await this.audio.load();
        },
        
        updateInfo() {
            const songName = this.songs[this.currentIndex].split('/').pop().replace('.mp3', '');
            document.getElementById('songInfo').textContent = songName;
        }
    };
    
    musicPlayer.init();
});