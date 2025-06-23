/**
 * =============================================
 * MAIN NAVIGATION SYSTEM
 * =============================================
 */

// Toggle mobile navigation menu
document.addEventListener('DOMContentLoaded', function() {
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');

    if (navToggle && navMenu) {
        // Toggle menu when hamburger is clicked
        navToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
        });

        // Close menu when nav link is clicked
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!navToggle.contains(e.target) && !navMenu.contains(e.target)) {
                navMenu.classList.remove('active');
            }
        });
    }

    // Highlight current page in navigation
    setActiveNavLink();
    
    // Initialize back to top button
    createBackToTopButton();
});

/**
 * Sets active state for current page navigation link
 */
function setActiveNavLink() {
    const currentPage = window.location.pathname.split('/').pop() || 'index.php';
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (href === currentPage || (currentPage === '' && href === 'index.php')) {
            link.classList.add('active');
        }
    });
}

/**
 * =============================================
 * TOURISM PAGE FUNCTIONALITY
 * =============================================
 */

/**
 * Switches between tourism category tabs
 * @param {string} categoryId - ID of category to show
 */
function showCategory(categoryId) {
    // Hide all category contents
    document.querySelectorAll('.category-content').forEach(content => {
        content.classList.remove('active');
    });

    // Remove active class from all tabs
    document.querySelectorAll('.tab-btn').forEach(tab => {
        tab.classList.remove('active');
    });

    // Show selected category
    const selectedContent = document.getElementById(categoryId);
    if (selectedContent) {
        selectedContent.classList.add('active');
    }

    // Add active class to clicked tab
    event.target.classList.add('active');
}

/**
 * =============================================
 * CONTACT FORM HANDLER
 * =============================================
 */

/**
 * Handles contact form submission
 * @param {Event} event - Form submit event
 */
function submitContact(event) {
    event.preventDefault();
    
    const form = event.target;
    const formData = new FormData(form);
    
    // Validate required fields
    if (!formData.get('name') || !formData.get('email') || 
        !formData.get('subject') || !formData.get('message')) {
        showNotification('Mohon lengkapi semua field yang wajib diisi!', 'error');
        return;
    }
    
    // Simulate form submission
    showNotification('Pesan Anda telah terkirim! Terima kasih.', 'success');
    form.reset();
}

/**
 * =============================================
 * COMMENT SYSTEM
 * =============================================
 */

/**
 * Adds new comment to the list
 * @param {Event} event - Form submit event
 */
function addComment(event) {
    event.preventDefault();
    
    const form = event.target;
    const formData = new FormData(form);
    
    // Validate required fields
    if (!formData.get('name') || !formData.get('email') || !formData.get('comment')) {
        showNotification('Mohon lengkapi semua field yang wajib diisi!', 'error');
        return;
    }
    
    // Create and add new comment
    const commentsList = document.getElementById('commentsList');
    if (commentsList) {
        const newComment = createCommentElement(
            formData.get('name'),
            formData.get('comment'),
            formData.get('rating')
        );
        commentsList.insertBefore(newComment, commentsList.firstChild);
        updateCommentsCount();
        showNotification('Komentar Anda telah ditambahkan!', 'success');
        form.reset();
    }
}

/**
 * Creates HTML element for new comment
 * @param {string} name - Commenter name
 * @param {string} comment - Comment text
 * @param {string} rating - Star rating
 */
function createCommentElement(name, comment, rating) {
    const commentDiv = document.createElement('div');
    commentDiv.className = 'comment-item';
    
    const ratingStars = rating ? '⭐'.repeat(parseInt(rating)) : '';
    const currentDate = new Date().toLocaleDateString('id-ID', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
    
    commentDiv.innerHTML = `
        <div class="comment-header">
            <div class="comment-author">
                <div class="author-avatar">👤</div>
                <div class="author-info">
                    <h4>${escapeHtml(name)}</h4>
                    <span class="comment-date">${currentDate}</span>
                </div>
            </div>
            <div class="comment-rating">${ratingStars}</div>
        </div>
        <div class="comment-content">
            <p>${escapeHtml(comment)}</p>
        </div>
    `;
    
    return commentDiv;
}

/**
 * Updates the comments counter
 */
function updateCommentsCount() {
    const commentItems = document.querySelectorAll('.comment-item');
    const totalComments = document.getElementById('totalComments');
    if (totalComments) {
        totalComments.textContent = commentItems.length;
    }
}

// Load More Comments (Dummy function)
function loadMoreComments() {
    showNotification('Tidak ada komentar lain untuk ditampilkan.', 'error');
}

// Escape HTML to prevent XSS
function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}

/**
 * =============================================
 * NOTIFICATION SYSTEM
 * =============================================
 */

/**
 * Shows temporary notification message
 * @param {string} message - Notification text
 * @param {string} type - Type of notification (success/error/info)
 */
function showNotification(message, type = 'info') {
    // Remove existing notification
    document.querySelector('.notification')?.remove();
    
    // Create new notification
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    
    // Notification styles
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: ${type === 'success' ? '#d4edda' : 
                    type === 'error' ? '#f8d7da' : '#d1ecf1'};
        color: ${type === 'success' ? '#155724' : 
               type === 'error' ? '#721c24' : '#0c5460'};
        border: 1px solid ${type === 'success' ? '#c3e6cb' : 
                           type === 'error' ? '#f5c6cb' : '#bee5eb'};
        border-radius: 8px;
        padding: 15px;
        max-width: 400px;
        z-index: 10000;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        animation: slideIn 0.3s ease-out;
    `;
    
    notification.innerHTML = `
        <div class="notification-content">
            <span class="notification-message">${message}</span>
            <button class="notification-close" onclick="this.parentElement.parentElement.remove()">×</button>
        </div>
    `;
    
    // Add to page
    document.body.appendChild(notification);
    
    // Auto-remove after 5 seconds
    setTimeout(() => notification.remove(), 5000);
}

/**
 * =============================================
 * UTILITY FUNCTIONS
 * =============================================
 */

/**
 * Creates "Back to Top" button
 */
function createBackToTopButton() {
    const button = document.createElement('button');
    button.innerHTML = '↑';
    button.className = 'back-to-top';
    button.title = 'Kembali ke atas';
    
    // Button styles
    button.style.cssText = `
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        background: #006699;
        color: white;
        border: none;
        border-radius: 50%;
        font-size: 20px;
        cursor: pointer;
        display: none;
        z-index: 1000;
        transition: all 0.3s;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    `;
    
    // Click handler
    button.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    // Show/hide based on scroll
    window.addEventListener('scroll', () => {
        button.style.display = window.pageYOffset > 300 ? 'block' : 'none';
    });
    
    document.body.appendChild(button);
}

/**
 * Escapes HTML to prevent XSS
 * @param {string} text - Text to escape
 */
function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}