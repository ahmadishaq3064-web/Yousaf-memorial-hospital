<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>

    <!-- Sidebar Toggle -->
    <input type="checkbox" id="nav-toggle">

    <!-- Sidebar -->
    <aside class="sidebar">

        <div class="brand">
            <div class="logo">✥</div>
            <div>
                <h3>Yousaf Memorial Hospital</h3>
                <p>A project of Muslim Medical Mission</p>
            </div>

            <label for="nav-toggle" class="close-btn">×</label>
        </div>

        <nav>

            <div class="nav-heading">OVERVIEW</div>

            <a href="{{url('dashboard')}}" class="nav-link active">
                <span>▦</span> Dashboard
            </a>

            <div class="nav-heading">CLINICAL</div>

            <a href="{{url('tokens')}}" class="nav-link">
                <span>⚿</span> Tokens
            </a>

            <a href="{{url('lab')}}" class="nav-link">
                <span>⚗</span> Lab
                <small class="beta">BETA</small>
            </a>

            <a href="{{url('services')}}" class="nav-link">
                <span>⊞</span> Services
            </a>

            <div class="nav-heading">PHARMACY</div>

            <a href="{{url('pos')}}" class="nav-link">
                <span>▤</span> POS
            </a>

            <a href="{{url('orders')}}" class="nav-link">
                <span>▣</span> Orders
            </a>

            <a href="{{url('inventory')}}" class="nav-link">
                <span>▤</span> Inventory
            </a>

            <a href="{{url('purchases')}}" class="nav-link">
                <span>🛒</span> Purchases
            </a>

            <div class="nav-heading">FINANCE</div>

            <a href="{{url('expenses')}}" class="nav-link">
                <span>▣</span> Expenses
            </a>

            <a href="{{url('reports')}}" class="nav-link">
                <span>▥</span> Reports
            </a>

            <div class="nav-heading">ADMINISTRATION</div>

            <a href="{{url('stakeholders')}}" class="nav-link">
                <span>♧</span> Stakeholders
            </a>

            <a href="{{url('users')}}" class="nav-link">
                <span>⛨</span> Users
            </a>

            <a href="{{url('settings')}}" class="nav-link">
                <span>⚙</span> Settings
            </a>

        </nav>

        <div class="sidebar-bottom">
            <a href="#" class="logout">⇥ &nbsp; Sign out</a>
        </div>

    </aside>


    <!-- Main Content -->
    <main class="main-content">

        <!-- Top Header -->
        <header class="topbar">

            <div class="page-title">
                <label for="nav-toggle" class="menu-btn">☰</label>
                <div>
                    <h1>Dashboard</h1>
                    <p>Overview & analytics</p>
                </div>
            </div>

            <div class="header-actions">

                <div class="date-control">
                    <span>▢</span> 7 Nov – 13 Nov
                    <button class="selected">Week</button>
                    <button>Month</button>
                </div>

                <div class="time-control">
                    ◷ &nbsp; 04:32 PM
                </div>

                <button class="refresh">⟳</button>

                <div class="admin">
                    <div class="admin-avatar">S</div>
                    <div>
                        <strong>Super Admin</strong>
                        <small>admin</small>
                    </div>
                </div>

            </div>

        </header>


        <!-- Dashboard -->
        <section class="dashboard">

            <!-- Statistics Cards -->
            <div class="stats-grid">

                <div class="stat-card">
                    <div class="stat-icon">▣</div>
                    <p>Week Revenue</p>
                    <h2>Rs 1.4M</h2>
                    <small>16 transactions</small>
                    <div class="mini-chart red-chart"></div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">♧</div>
                    <p>Patients</p>
                    <h2>5</h2>
                    <small>4 OPD · 8 Lab</small>
                    <div class="mini-chart red-chart"></div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">↗</div>
                    <p>Avg Daily Revenue</p>
                    <h2>Rs 206.3K</h2>
                    <small>7 Nov – 13 Nov</small>
                    <div class="mini-chart red-chart"></div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon green-icon">♙</div>
                    <p>Net Profit</p>
                    <h2>Rs 1.4M</h2>
                    <small>Expenses Rs 0 · Purchases Rs 0</small>
                    <div class="mini-chart green-chart"></div>
                </div>

            </div>


            <!-- Revenue Section -->
            <div class="analytics-grid">

                <div class="card revenue-card">

                    <div class="card-heading">
                        <div class="stat-icon">↗</div>
                        <div>
                            <h3>Revenue Analytics</h3>
                            <p>Daily Revenue (7 days)</p>
                        </div>
                    </div>

                    <div class="revenue-chart">

                        <div class="peak-label">444K</div>

                        <svg viewBox="0 0 600 230"
                             preserveAspectRatio="none">

                            <defs>
                                <linearGradient id="chartFill"
                                    x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0%"
                                        stop-color="#b52a2a"
                                        stop-opacity=".3"/>
                                    <stop offset="100%"
                                        stop-color="#b52a2a"
                                        stop-opacity=".02"/>
                                </linearGradient>
                            </defs>

                            <path
                                d="M0 210
                                   L200 210
                                   C245 210 250 15 300 15
                                   C350 15 355 210 400 210
                                   L600 210
                                   L600 230 L0 230 Z"
                                fill="url(#chartFill)"/>

                            <path
                                d="M0 210
                                   L200 210
                                   C245 210 250 15 300 15
                                   C350 15 355 210 400 210
                                   L600 210"
                                fill="none"
                                stroke="#b52a2a"
                                stroke-width="2.5"/>

                        </svg>

                        <div class="chart-days">
                            <span>Sat</span>
                            <span>Sun</span>
                            <span>Mon</span>
                            <span>Tue</span>
                            <span>Wed</span>
                            <span>Thu</span>
                            <span>Fri</span>
                        </div>

                    </div>

                </div>


                <!-- Revenue Mix -->
                <div class="card mix-card">

                    <div class="card-heading">
                        <div class="stat-icon">◉</div>
                        <h3>Revenue Mix (Week)</h3>
                    </div>

                    <div class="mix-content">

                        <div class="donut-chart"></div>

                        <div class="mix-details">

                            <div class="mix-item">
                                <span class="dot opd"></span>
                                <span>OPD</span>
                                <strong>Rs 600</strong>
                                <small>0%</small>
                            </div>

                            <div class="mix-item">
                                <span class="dot lab"></span>
                                <span>Laboratory</span>
                                <strong>Rs 1.4M</strong>
                                <small>100%</small>
                            </div>

                            <div class="mix-item">
                                <span class="dot pharmacy"></span>
                                <span>Pharmacy / POS</span>
                                <strong>Rs 3518.25</strong>
                                <small>0%</small>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Bottom Cards -->
            <div class="bottom-grid">

                <!-- Top Doctors -->
                <div class="card bottom-card">

                    <div class="card-heading">
                        <div class="stat-icon">♧</div>
                        <div>
                            <h3>Top Doctors</h3>
                            <p>Week by OPD volume</p>
                        </div>
                    </div>

                    <div class="ranking">

                        <div class="ranking-info">
                            <strong>sulais</strong>
                            <div>
                                <span>3 visits</span>
                                <strong>Rs 450</strong>
                            </div>
                        </div>

                        <div class="progress">
                            <div style="width:100%"></div>
                        </div>

                    </div>

                    <div class="ranking">

                        <div class="ranking-info">
                            <strong>abdulrehman</strong>
                            <div>
                                <span>1 visits</span>
                                <strong>Rs 150</strong>
                            </div>
                        </div>

                        <div class="progress">
                            <div style="width:33%"></div>
                        </div>

                    </div>

                </div>


                <!-- Top Services -->
                <div class="card bottom-card">

                    <div class="card-heading">
                        <div class="stat-icon">⊞</div>
                        <div>
                            <h3>Top Services</h3>
                            <p>Most requested · Week</p>
                        </div>
                    </div>

                    <div class="ranking">

                        <div class="ranking-info">
                            <strong>General</strong>
                            <div>
                                <span>4 visits</span>
                                <strong>Rs 600</strong>
                            </div>
                        </div>

                        <div class="progress">
                            <div style="width:100%"></div>
                        </div>

                    </div>

                </div>


                <!-- POS Payments -->
                <div class="card bottom-card">

                    <div class="card-heading">
                        <div class="stat-icon">▤</div>
                        <div>
                            <h3>POS Payments</h3>
                            <p>Pharmacy payments · Week</p>
                        </div>
                    </div>

                    <div class="payment">

                        <div class="payment-info">
                            <span><i class="dot cash"></i> Cash</span>
                            <strong>Rs 2868.25</strong>
                            <small>82%</small>
                        </div>

                        <div class="progress green-progress">
                            <div style="width:82%"></div>
                        </div>

                        <small class="sales">3 sales</small>

                    </div>

                    <div class="payment">

                        <div class="payment-info">
                            <span><i class="dot online"></i> Online</span>
                            <strong>Rs 650</strong>
                            <small>18%</small>
                        </div>

                        <div class="progress">
                            <div style="width:18%"></div>
                        </div>

                        <small class="sales">1 sales</small>

                    </div>

                </div>

            </div>

        </section>

    </main>

</body>
</html>
