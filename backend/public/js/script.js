// Sample game data
const games = [
    {
        id: 1,
        title: "Mobile Legends",
        category: "MOBA",
        image: "https://images.unsplash.com/photo-1511512578047-dfb367046420?w=400&h=300&fit=crop"
    },
    {
        id: 2,
        title: "PUBG Mobile",
        category: "Battle Royale",
        image: "https://images.unsplash.com/photo-1542751371-adc38448a05e?w=400&h=300&fit=crop"
    },
    {
        id: 3,
        title: "Genshin Impact",
        category: "RPG",
        image: "https://images.unsplash.com/photo-1552820728-8b83bb6b773f?w=400&h=300&fit=crop"
    },
    {
        id: 4,
        title: "Free Fire",
        category: "Battle Royale",
        image: "https://images.unsplash.com/photo-1538481199705-c710c4e965fc?w=400&h=300&fit=crop"
    },
    {
        id: 5,
        title: "Valorant",
        category: "FPS",
        image: "https://images.unsplash.com/photo-1560419015-7c427e8ae5ba?w=400&h=300&fit=crop"
    },
    {
        id: 6,
        title: "League of Legends",
        category: "MOBA",
        image: "https://images.unsplash.com/photo-1556438064-2d7646166914?w=400&h=300&fit=crop"
    },
    {
        id: 7,
        title: "Clash of Clans",
        category: "Strategy",
        image: "https://images.unsplash.com/photo-1509198397868-475647b2a1e5?w=400&h=300&fit=crop"
    },
    {
        id: 8,
        title: "Honkai Impact",
        category: "Action RPG",
        image: "https://images.unsplash.com/photo-1550745165-9bc0b252726f?w=400&h=300&fit=crop"
    }
];

// Mobile menu toggle
const menuToggle = document.getElementById('menuToggle');
const navMenu = document.querySelector('.nav-menu');

menuToggle.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    menuToggle.classList.toggle('active');
});

// Close menu when clicking on a link
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.remove('active');
        menuToggle.classList.remove('active');
    });
});

// Render games
function renderGames(gamesToRender) {
    const gamesGrid = document.getElementById('gamesGrid');
    gamesGrid.innerHTML = '';

    gamesToRender.forEach((game, index) => {
        const gameCard = document.createElement('div');
        gameCard.className = 'game-card';
        gameCard.style.animationDelay = `${index * 0.1}s`;
        
        gameCard.innerHTML = `
            <img src="${game.image}" alt="${game.title}" class="game-image">
            <div class="game-info">
                <h3 class="game-title">${game.title}</h3>
                <p class="game-category">${game.category}</p>
            </div>
        `;

        gameCard.addEventListener('click', () => {
            alert(`You selected ${game.title}. Redirecting to top-up page...`);
        });

        gamesGrid.appendChild(gameCard);
    });
}

// Search functionality
const searchInput = document.getElementById('searchInput');
const searchBtn = document.querySelector('.search-btn');

function searchGames() {
    const searchTerm = searchInput.value.toLowerCase();
    const filteredGames = games.filter(game => 
        game.title.toLowerCase().includes(searchTerm) || 
        game.category.toLowerCase().includes(searchTerm)
    );
    renderGames(filteredGames);
}

searchBtn.addEventListener('click', searchGames);

searchInput.addEventListener('keyup', (e) => {
    if (e.key === 'Enter') {
        searchGames();
    }
});

// Real-time search
searchInput.addEventListener('input', () => {
    if (searchInput.value === '') {
        renderGames(games);
    } else {
        searchGames();
    }
});

// Smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Add scroll effect to header
let lastScroll = 0;
const header = document.querySelector('.header');

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    
    if (currentScroll > lastScroll && currentScroll > 100) {
        header.style.transform = 'translateY(-100%)';
    } else {
        header.style.transform = 'translateY(0)';
    }
    
    lastScroll = currentScroll;
});

// Add parallax effect to hero
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const hero = document.querySelector('.hero');
    if (hero) {
        hero.style.transform = `translateY(${scrolled * 0.5}px)`;
    }
});

// Initialize
document.addEventListener('DOMContentLoaded', () => {
    renderGames(games);
    
    // Add animation to feature cards on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animation = 'fadeInUp 0.6s ease-out';
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.feature-card').forEach(card => {
        observer.observe(card);
    });
});