/**
 * ブログページネーション機能
 * 外部ライブラリ不使用のバニラJavaScript実装
 */
(function() {
    'use strict';

    // 設定
    const POSTS_PER_PAGE = 8; //1ページあたりの投稿数
    const MAX_PAGE_BUTTONS = 3; //表示するページ番号ボタンの最大数（省略記号含まず）

    class BlogPagination {
        constructor() {
            this.postList = document.querySelector('.WpPostList');
            this.paginationContainer = document.querySelector('.pagination-container');

            if (!this.postList || !this.paginationContainer) {
                return;
            }

            this.posts = Array.from(this.postList.querySelectorAll('.post-item'));
            this.currentPage = 1;
            this.totalPages = Math.ceil(this.posts.length / POSTS_PER_PAGE);

            this.init();
        }

        init() {
            this.renderPagination();
            this.showPage(1);
        }

        showPage(pageNumber) {
            this.currentPage = pageNumber;
            const startIndex = (pageNumber - 1) * POSTS_PER_PAGE;
            const endIndex = startIndex + POSTS_PER_PAGE;

            // 全ての投稿を非表示にしてから、該当ページの投稿のみ表示
            this.posts.forEach((post, index) => {
                if (index >= startIndex && index < endIndex) {
                    post.classList.add('post-visible');
                    post.classList.remove('post-hidden');
                } else {
                    post.classList.add('post-hidden');
                    post.classList.remove('post-visible');
                }
            });

            this.updatePaginationButtons();
            this.scrollToTop();
        }

        renderPagination() {
            if (this.totalPages <= 1) {
                this.paginationContainer.style.display = 'none';
                return;
            }

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
            const numbersContainer = this.paginationContainer.querySelector('.pagination-numbers');
            const prevButton = this.paginationContainer.querySelector('.pagination-prev');
            const nextButton = this.paginationContainer.querySelector('.pagination-next');

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
                // 総ページ数がMAX_PAGE_BUTTONS以下の場合は全て表示
                for (let i = 1; i <= this.totalPages; i++) {
                    pages.push(i);
                }
            } else {
                // 現在のページを中心にMAX_PAGE_BUTTONSの数だけ表示
                const halfButtons = Math.floor(MAX_PAGE_BUTTONS / 2);

                let start = this.currentPage - halfButtons;
                let end = this.currentPage + halfButtons;

                // 最初のページ付近の調整
                if (start < 1) {
                    start = 1;
                    end = MAX_PAGE_BUTTONS;
                }

                // 最後のページ付近の調整
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
            new BlogPagination();
        });
    } else {
        new BlogPagination();
    }
})();