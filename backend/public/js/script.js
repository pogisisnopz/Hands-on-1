// Create animated background particles
function createParticles() {
    const particlesContainer = document.querySelector('.particles');
    const particleCount = 50;

    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.left = Math.random() * 100 + '%';
        particle.style.top = Math.random() * 100 + '%';
        particle.style.animationDelay = Math.random() * 6 + 's';
        particle.style.animationDuration = (Math.random() * 4 + 4) + 's';
        particlesContainer.appendChild(particle);
    }
}

// Smooth scroll for navigation links
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

// Add to cart functionality
document.querySelectorAll('.buy-button').forEach(button => {
    button.addEventListener('click', function() {
        const gameTitle = this.parentElement.querySelector('.game-title').textContent;
        this.textContent = 'Added! ✓';
        this.style.background = 'linear-gradient(45deg, #00ff88, #00d4ff)';
        
        setTimeout(() => {
            this.textContent = 'Add to Cart';
            this.style.background = 'linear-gradient(45deg, #00d4ff, #ff00ff)';
        }, 2000);
    });
});

// Header scroll effect
window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    if (window.scrollY > 100) {
        header.style.background = 'rgba(15, 15, 35, 0.98)';
    } else {
        header.style.background = 'rgba(15, 15, 35, 0.95)';
    }
});

// Animate stats on scroll
function animateStats() {
    const stats = document.querySelectorAll('.stat-number');
    stats.forEach(stat => {
        const finalValue = stat.textContent;
        if (finalValue.includes('M')) {
            animateValue(stat, 0, parseInt(finalValue), 2000);
        } else if (finalValue.includes('K')) {
            animateValue(stat, 0, parseInt(finalValue), 1500);
        }
    });
}

function animateValue(element, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        const currentValue = Math.floor(progress * (end - start) + start);
        
        if (element.textContent.includes('M')) {
            element.textContent = currentValue + 'M+';
        } else if (element.textContent.includes('K')) {
            element.textContent = currentValue + 'K+';
        } else if (element.textContent.includes('/')) {
            element.textContent = '24/7';
        }
        
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}

// Initialize
createParticles();

// Intersection Observer for stats animation
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateStats();
            observer.unobserve(entry.target);
        }
    });
});

observer.observe(document.querySelector('.stats'));