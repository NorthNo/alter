<header>
    <div class="navbar-dashboard">
        <div class="vertical-container">
            <div class="search-div">
                <div class="icon"><i class="fa-solid fa-search"></i></div>
                <input type="search" placeholder="Search here..">
            </div>
            <div class="user-sect">
                <div class="notification" id="notification">
                    <i class="fa-solid fa-bell"></i>
                </div>
                <div class="notification-dropdown" id="notification-dropdown">
                    <ul>
                        <li>
                            <div class="message">
                                <div class="message-part">
                                    <i class="fa-solid fa-circle-exclamation"></i>
                                    <p class="message-text">Test Notification 1</p>
                                </div>
                                <div class="message-part">
                                    <p class="message-date">2024.09.13 20.53</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="message">
                                <div class="message-part">
                                    <i class="fa-solid fa-circle-exclamation"></i>
                                    <p class="message-text">Test Notification 2</p>
                                </div>
                                <div class="message-part">
                                    <p class="message-date">2024.09.13 21.42</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="message">
                                <div class="message-part">
                                    <p class="message-text">Test Notification 2</p>
                                </div>
                                <div class="message-part">
                                    <p class="message-date">2024.09.13 21.42</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="user-dropdown">
                    <button class="user-info" id="user-dropdown">
                        <i class="fa-solid fa-user interactable"></i><i
                            class="fa-solid fa-caret-down interactable-menu"></i>
                    </button>
                    <div class="dropdown-content" id="admin-dropdown">
                        <div class="admin-profile">
                            <p>{{ Auth::user()->email }}</p>
                        </div>
                        <ul>
                            <li>
                                <a href="/logout"><i
                                        class="fa-solid fa-arrow-right-from-bracket"></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>