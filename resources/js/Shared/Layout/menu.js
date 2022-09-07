export const menuItems = [{
        id: 1,
        label: "Menu",
        isTitle: true,
        user: [],
    },
    {
        id: 2,
        label: "Home",
        icon: "bx-home-circle",
        link: "/home",
        component: "Home/Index",
        name: "Home",
        user: ['Super Administrator', 'Regional Director', 'Scholarship Coordinator', 'Scholarship Staff'],
    },
    {
        id: 2,
        label: "Monitoring",
        icon: "bxs-webcam",
        link: "/monitoring",
        component: "Monitoring/Index",
        name: "Monitoring",
        user: ['Scholarship Coordinator', 'Scholarship Staff'],
    },
    {
        id: 10,
        label: "Qualifiers",
        icon: "bx-id-card",
        link: "/qualifiers",
        component: "Qualifiers/Index",
        name: "Qualifiers",
        user: ['Scholarship Coordinator', 'Scholarship Staff'],
    },
    {
        id: 11,
        label: "Scholars",
        icon: "bx-group",
        link: "/scholars",
        name: "Scholars",
        component: "Scholars/Index",
        user: ['Scholarship Coordinator', 'Scholarship Staff'],
    },
    {
        id: 12,
        label: "Enrollments",
        icon: "bxs-folder-open",
        link: "/enrollments",
        component: "Enrollments/Index",
        name: "Enrollments",
        user: ['Scholarship Coordinator', 'Scholarship Staff'],
    },
    // {
    //     id: 12,
    //     label: "Financial Benefits",
    //     icon: "bx-credit-card-front",
    //     link: "/benefits",
    //     component: "Benefits/Index",
    //     name: "Benefits",
    //     user: ['Scholarship Coordinator'],
    // },
    // {
    //     id: 191,
    //     label: "Financial Benefits 2",
    //     icon: "bx-credit-card-front",
    //     link: "/benefits2",
    //     component: "Benefits2/Index",
    //     name: "Benefits2",
    //     user: ['Scholarship Coordinator', 'Scholarship Staff'],
    // },
    {
        id: 191,
        label: "Financial Benefits 3",
        icon: "bx-credit-card-front",
        link: "/benefits3",
        component: "Benefits3/Index",
        name: "Benefits3",
        user: ['Scholarship Coordinator', 'Scholarship Staff'],
    },
    {
        id: 123,
        label: "Accounting",
        icon: "bxs-wallet",
        link: "/accounting",
        component: "Accounting/Index",
        name: "Accounting",
        user: ['Scholarship Coordinator', 'Scholarship Staff'],
    },
    {
        id: 122,
        label: "Events",
        icon: "bxs-calendar-event",
        link: "/events",
        component: "Events/Index",
        name: "Events",
        user: ['Scholarship Coordinator', 'Scholarship Staff'],
    },
    {
        id: 4,
        label: "Schools",
        icon: "bxs-school",
        link: "/schools",
        component: "Schools/Index",
        name: "Schools",
        user: ['Super Administrator', 'Scholarship Coordinator'],
    },
    {
        id: 13,
        label: "Insights",
        icon: "bx-line-chart",
        link: "/insights",
        component: "Insights/Index",
        name: "Insights",
        user: ['Super Administrator', 'Scholarship Coordinator', 'Regional Director'],
    },
    {
        id: 3,
        label: "Users",
        icon: "bxs-user-circle",
        link: "/users",
        component: "Users/Index",
        name: "Users",
        user: ['Super Administrator'],
    },

    {
        id: 5,
        label: "Downloads",
        icon: "bx-cloud-download",
        link: "/downloads",
        component: "Downloads/Index",
        user: ['Super Administrator'],
    },
    {
        id: 6,
        label: "Logs",
        icon: "bx-message-square-dots",
        link: "/logs",
        component: "Logs/Index",
        user: ['Super Administrator'],
    }
];