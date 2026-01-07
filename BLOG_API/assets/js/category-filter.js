/**
 * カテゴリーフィルター機能
 * ブログ記事をカテゴリーで絞り込み、ページネーションと連携
 */
(function() {
  'use strict';

  // 設定
  const POSTS_PER_PAGE = 8; // blog.jsと同じ値を設定
  const MAX_PAGE_BUTTONS = 3;

  class CategoryFilter {
    constructor() {
      this.filterContainer = document.querySelector('.category-filter');
      this.postList = document.querySelector('.WpPostList');
      this.paginationContainer = document.querySelector('.pagination-container');

      if (!this.filterContainer || !this.postList) {
        return;
      }

      this.filterButtons = this.filterContainer.querySelectorAll('.category-filter-button');
      this.allPosts = Array.from(this.postList.querySelectorAll('.post-item'));
      this.filteredPosts = [...this.allPosts];
      this.currentCategory = 'all';
      this.currentPage = 1;

      this.init();
    }

    init() {
      this.bindEvents();
      // 初期表示（全件表示）
      this.filterByCategory('all');
    }

    bindEvents() {
      this.filterButtons.forEach(button => {
        button.addEventListener('click', (e) => {
          const category = e.target.dataset.category;
          this.filterByCategory(category);
        });
      });
    }

    filterByCategory(category) {
      this.currentCategory = category;
      this.currentPage = 1;

      // アクティブボタンの更新
      this.updateActiveButton(category);

      // フィルタリング
      if (category === 'all') {
        this.filteredPosts = [...this.allPosts];
      } else {
        this.filteredPosts = this.allPosts.filter(post => {
          const postCategories = post.dataset.categories;
          if (!postCategories) return false;
          // カンマ区切りのカテゴリーリストをチェック
          const categoryList = postCategories.split(',');
          return categoryList.includes(category);
        });
      }

      // 全投稿を一旦非表示
      this.allPosts.forEach(post => {
        post.classList.add('post-hidden');
        post.classList.remove('post-visible');
      });

      // ページネーションを更新して表示
      this.updatePagination();
      this.showPage(1);
    }

    updateActiveButton(category) {
      this.filterButtons.forEach(button => {
        if (button.dataset.category === category) {
          button.classList.add('is-active');
        } else {
          button.classList.remove('is-active');
        }
      });
    }

    showPage(pageNumber) {
      this.currentPage = pageNumber;
      const startIndex = (pageNumber - 1) * POSTS_PER_PAGE;
      const endIndex = startIndex + POSTS_PER_PAGE;

      // フィルタリングされた投稿のみを対象に表示/非表示
      this.allPosts.forEach(post => {
        post.classList.add('post-hidden');
        post.classList.remove('post-visible');
      });

      this.filteredPosts.forEach((post, index) => {
        if (index >= startIndex && index < endIndex) {
          post.classList.add('post-visible');
          post.classList.remove('post-hidden');
        }
      });

      this.updatePaginationButtons();
      this.scrollToTop();
    }

    updatePagination() {
      const totalPages = Math.ceil(this.filteredPosts.length / POSTS_PER_PAGE);

      if (!this.paginationContainer) return;

      if (totalPages <= 1) {
        this.paginationContainer.style.display = 'none';
        return;
      }

      this.paginationContainer.style.display = 'flex';
      this.renderPagination(totalPages);
    }

    renderPagination(totalPages) {
      this.totalPages = totalPages;

      const paginationHTML = `
        <button class="pagination-prev" aria-label="前のページ">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2"/>
          </svg>
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2"/>
          </svg>
        </button>
        <div class="pagination-numbers"></div>
        <button class="pagination-next" aria-label="次のページ">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2"/>
          </svg>
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2"/>
          </svg>
        </button>
      `;

      this.paginationContainer.innerHTML = paginationHTML;

      // イベントリスナー登録
      this.paginationContainer.querySelector('.pagination-prev').addEventListener('click', () => {
        if (this.currentPage > 1) {
          this.showPage(this.currentPage - 1);
        }
      });

      this.paginationContainer.querySelector('.pagination-next').addEventListener('click', () => {
        if (this.currentPage < this.totalPages) {
          this.showPage(this.currentPage + 1);
        }
      });

      this.updatePaginationButtons();
    }

    updatePaginationButtons() {
      if (!this.paginationContainer) return;

      const numbersContainer = this.paginationContainer.querySelector('.pagination-numbers');
      const prevButton = this.paginationContainer.querySelector('.pagination-prev');
      const nextButton = this.paginationContainer.querySelector('.pagination-next');

      if (!numbersContainer || !prevButton || !nextButton) return;

      // 前へボタンの状態
      prevButton.disabled = this.currentPage === 1;

      // 次へボタンの状態
      nextButton.disabled = this.currentPage === this.totalPages;

      // ページ番号ボタンの生成
      const pageNumbers = this.calculatePageNumbers();
      numbersContainer.innerHTML = pageNumbers.map(pageNum => {
        if (pageNum === '...') {
          return '<span class="pagination-ellipsis">...</span>';
        }

        const isActive = pageNum === this.currentPage;
        return `
          <button
            class="pagination-number ${isActive ? 'is-active' : ''}"
            data-page="${pageNum}"
            ${isActive ? 'aria-current="page"' : ''}
          >
            ${pageNum}
          </button>
        `;
      }).join('');

      // ページ番号ボタンのイベントリスナー
      numbersContainer.querySelectorAll('.pagination-number').forEach(button => {
        button.addEventListener('click', (e) => {
          const pageNum = parseInt(e.target.dataset.page);
          this.showPage(pageNum);
        });
      });
    }

    calculatePageNumbers() {
      const pages = [];

      if (this.totalPages <= MAX_PAGE_BUTTONS) {
        for (let i = 1; i <= this.totalPages; i++) {
          pages.push(i);
        }
      } else {
        const halfButtons = Math.floor(MAX_PAGE_BUTTONS / 2);
        let start = this.currentPage - halfButtons;
        let end = this.currentPage + halfButtons;

        if (start < 1) {
          start = 1;
          end = MAX_PAGE_BUTTONS;
        }

        if (end > this.totalPages) {
          end = this.totalPages;
          start = this.totalPages - MAX_PAGE_BUTTONS + 1;
        }

        for (let i = start; i <= end; i++) {
          pages.push(i);
        }
      }

      return pages;
    }

    scrollToTop() {
      this.postList.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  }

  // DOMContentLoaded後に初期化
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
      new CategoryFilter();
    });
  } else {
    new CategoryFilter();
  }
})();
