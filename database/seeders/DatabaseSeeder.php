<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // === USERS (realistic team members) ===
        $sarah = User::factory()->create([
            'name' => 'Sarah Chen',
            'email' => 'sarah.chen@company.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);

        $marcus = User::factory()->create([
            'name' => 'Marcus Johnson',
            'email' => 'marcus.johnson@company.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);

        $elena = User::factory()->create([
            'name' => 'Elena Rodriguez',
            'email' => 'elena.rodriguez@company.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);

        $david = User::factory()->create([
            'name' => 'David Kim',
            'email' => 'david.kim@company.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);

        $olivia = User::factory()->create([
            'name' => 'Olivia Thompson',
            'email' => 'olivia.thompson@company.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);

        $james = User::factory()->create([
            'name' => 'James Wilson',
            'email' => 'james.wilson@company.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);

        $priya = User::factory()->create([
            'name' => 'Priya Patel',
            'email' => 'priya.patel@company.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);

        $alex = User::factory()->create([
            'name' => 'Alex Morgan',
            'email' => 'alex.morgan@company.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);

        // === PROJECTS ===
        $websiteRedesign = Project::create([
            'name' => 'Website Redesign',
            'description' => 'Complete overhaul of the company website with modern UI, improved performance, and mobile-first responsive design. Includes new brand identity integration and SEO optimization.',
            'due_date' => '2026-06-15',
            'status' => 'in_progress',
            'created_by' => $sarah->id,
            'updated_by' => $sarah->id,
            'created_at' => '2026-01-10',
            'updated_at' => '2026-03-20',
        ]);

        $mobileApp = Project::create([
            'name' => 'Mobile App v2.0',
            'description' => 'Second major release of the mobile application featuring push notifications, offline mode, biometric authentication, and a redesigned onboarding flow.',
            'due_date' => '2026-08-01',
            'status' => 'in_progress',
            'created_by' => $sarah->id,
            'updated_by' => $marcus->id,
            'created_at' => '2026-02-01',
            'updated_at' => '2026-03-25',
        ]);

        $apiMigration = Project::create([
            'name' => 'API Migration to v3',
            'description' => 'Migrate the legacy REST API from v2 to v3 with improved rate limiting, versioned endpoints, better error handling, and OpenAPI documentation.',
            'due_date' => '2026-09-30',
            'status' => 'pending',
            'created_by' => $david->id,
            'updated_by' => $david->id,
            'created_at' => '2026-03-01',
            'updated_at' => '2026-03-01',
        ]);

        $customerPortal = Project::create([
            'name' => 'Customer Portal',
            'description' => 'Self-service portal for enterprise customers to manage subscriptions, view invoices, submit support tickets, and access usage analytics.',
            'due_date' => '2026-07-20',
            'status' => 'in_progress',
            'created_by' => $sarah->id,
            'updated_by' => $elena->id,
            'created_at' => '2026-01-20',
            'updated_at' => '2026-03-28',
        ]);

        $analyticsDashboard = Project::create([
            'name' => 'Internal Analytics Dashboard',
            'description' => 'Real-time business metrics dashboard for the leadership team. Displays revenue, user growth, churn rate, and feature adoption with exportable reports.',
            'due_date' => '2026-03-01',
            'status' => 'completed',
            'created_by' => $marcus->id,
            'updated_by' => $marcus->id,
            'created_at' => '2025-11-15',
            'updated_at' => '2026-02-28',
        ]);

        $ecommerce = Project::create([
            'name' => 'E-commerce Integration',
            'description' => 'Integrate third-party e-commerce platform with existing inventory management system. Includes Stripe payment processing, order tracking, and webhook handlers.',
            'due_date' => '2026-10-15',
            'status' => 'pending',
            'created_by' => $sarah->id,
            'updated_by' => $sarah->id,
            'created_at' => '2026-03-15',
            'updated_at' => '2026-03-15',
        ]);

        // === TASKS ===

        // -- Website Redesign tasks --
        Task::create([
            'name' => 'Design new homepage mockup',
            'description' => 'Create high-fidelity mockups for the new homepage layout including hero section, feature highlights, testimonials, and footer.',
            'status' => 'completed',
            'priority' => 'high',
            'due_date' => '2026-02-15',
            'assigned_user_id' => $olivia->id,
            'project_id' => $websiteRedesign->id,
            'created_by' => $sarah->id,
            'updated_by' => $olivia->id,
            'created_at' => '2026-01-10',
            'updated_at' => '2026-02-12',
        ]);

        Task::create([
            'name' => 'Implement responsive navigation bar',
            'description' => 'Build a mobile-first responsive nav bar with hamburger menu, dropdown submenus, and smooth scroll behavior.',
            'status' => 'completed',
            'priority' => 'high',
            'due_date' => '2026-03-01',
            'assigned_user_id' => $elena->id,
            'project_id' => $websiteRedesign->id,
            'created_by' => $sarah->id,
            'updated_by' => $elena->id,
            'created_at' => '2026-01-15',
            'updated_at' => '2026-02-28',
        ]);

        Task::create([
            'name' => 'Migrate blog content to new CMS',
            'description' => 'Export all existing blog posts and migrate them to the new headless CMS. Ensure images, metadata, and URL slugs are preserved.',
            'status' => 'in_progress',
            'priority' => 'medium',
            'due_date' => '2026-04-20',
            'assigned_user_id' => $alex->id,
            'project_id' => $websiteRedesign->id,
            'created_by' => $sarah->id,
            'updated_by' => $alex->id,
            'created_at' => '2026-02-20',
            'updated_at' => '2026-03-18',
        ]);

        Task::create([
            'name' => 'SEO audit and meta tag optimization',
            'description' => 'Run a full SEO audit on all pages. Update meta titles, descriptions, Open Graph tags, and implement structured data markup.',
            'status' => 'pending',
            'priority' => 'medium',
            'due_date' => '2026-05-10',
            'assigned_user_id' => $elena->id,
            'project_id' => $websiteRedesign->id,
            'created_by' => $sarah->id,
            'updated_by' => $sarah->id,
            'created_at' => '2026-03-01',
            'updated_at' => '2026-03-01',
        ]);

        Task::create([
            'name' => 'Set up performance monitoring',
            'description' => 'Integrate Lighthouse CI and Web Vitals tracking. Set up alerts for performance regressions on Core Web Vitals metrics.',
            'status' => 'pending',
            'priority' => 'low',
            'due_date' => '2026-05-30',
            'assigned_user_id' => $james->id,
            'project_id' => $websiteRedesign->id,
            'created_by' => $marcus->id,
            'updated_by' => $marcus->id,
            'created_at' => '2026-03-10',
            'updated_at' => '2026-03-10',
        ]);

        Task::create([
            'name' => 'Build contact form with validation',
            'description' => 'Create a contact form with client-side and server-side validation, honeypot spam protection, and email notification to the sales team.',
            'status' => 'in_progress',
            'priority' => 'medium',
            'due_date' => '2026-04-15',
            'assigned_user_id' => $alex->id,
            'project_id' => $websiteRedesign->id,
            'created_by' => $sarah->id,
            'updated_by' => $alex->id,
            'created_at' => '2026-03-05',
            'updated_at' => '2026-03-22',
        ]);

        // -- Mobile App v2.0 tasks --
        Task::create([
            'name' => 'Implement push notification service',
            'description' => 'Set up Firebase Cloud Messaging for push notifications. Handle foreground/background states and deep linking from notifications.',
            'status' => 'in_progress',
            'priority' => 'high',
            'due_date' => '2026-04-30',
            'assigned_user_id' => $david->id,
            'project_id' => $mobileApp->id,
            'created_by' => $marcus->id,
            'updated_by' => $david->id,
            'created_at' => '2026-02-05',
            'updated_at' => '2026-03-20',
        ]);

        Task::create([
            'name' => 'Design onboarding flow screens',
            'description' => 'Design 4-step onboarding flow: welcome, permissions request, profile setup, and tutorial walkthrough with skip option.',
            'status' => 'completed',
            'priority' => 'high',
            'due_date' => '2026-03-15',
            'assigned_user_id' => $olivia->id,
            'project_id' => $mobileApp->id,
            'created_by' => $sarah->id,
            'updated_by' => $olivia->id,
            'created_at' => '2026-02-01',
            'updated_at' => '2026-03-10',
        ]);

        Task::create([
            'name' => 'Add biometric authentication',
            'description' => 'Implement fingerprint and Face ID login as an alternative to password. Store biometric preference securely in the device keychain.',
            'status' => 'in_progress',
            'priority' => 'high',
            'due_date' => '2026-05-15',
            'assigned_user_id' => $marcus->id,
            'project_id' => $mobileApp->id,
            'created_by' => $marcus->id,
            'updated_by' => $marcus->id,
            'created_at' => '2026-03-01',
            'updated_at' => '2026-03-25',
        ]);

        Task::create([
            'name' => 'Build offline data sync module',
            'description' => 'Implement local SQLite caching with background sync when connectivity is restored. Handle conflict resolution for concurrent edits.',
            'status' => 'pending',
            'priority' => 'high',
            'due_date' => '2026-06-01',
            'assigned_user_id' => $david->id,
            'project_id' => $mobileApp->id,
            'created_by' => $marcus->id,
            'updated_by' => $marcus->id,
            'created_at' => '2026-03-10',
            'updated_at' => '2026-03-10',
        ]);

        Task::create([
            'name' => 'Write unit tests for auth module',
            'description' => 'Achieve 90%+ coverage on the authentication module including login, logout, token refresh, biometric fallback, and session expiry flows.',
            'status' => 'pending',
            'priority' => 'medium',
            'due_date' => '2026-06-15',
            'assigned_user_id' => $priya->id,
            'project_id' => $mobileApp->id,
            'created_by' => $marcus->id,
            'updated_by' => $marcus->id,
            'created_at' => '2026-03-15',
            'updated_at' => '2026-03-15',
        ]);

        // -- API Migration tasks --
        Task::create([
            'name' => 'Document all v2 endpoints',
            'description' => 'Create a complete inventory of all existing v2 REST endpoints including request/response schemas, auth requirements, and rate limits.',
            'status' => 'in_progress',
            'priority' => 'high',
            'due_date' => '2026-04-15',
            'assigned_user_id' => $david->id,
            'project_id' => $apiMigration->id,
            'created_by' => $david->id,
            'updated_by' => $david->id,
            'created_at' => '2026-03-01',
            'updated_at' => '2026-03-20',
        ]);

        Task::create([
            'name' => 'Design v3 endpoint structure',
            'description' => 'Plan the new API structure with consistent naming, versioned URLs, pagination standards, and error response format following RFC 7807.',
            'status' => 'pending',
            'priority' => 'high',
            'due_date' => '2026-05-01',
            'assigned_user_id' => $david->id,
            'project_id' => $apiMigration->id,
            'created_by' => $david->id,
            'updated_by' => $david->id,
            'created_at' => '2026-03-05',
            'updated_at' => '2026-03-05',
        ]);

        Task::create([
            'name' => 'Set up API versioning middleware',
            'description' => 'Implement URL-based API versioning with middleware that routes requests to the correct controller version. Support v2 and v3 simultaneously.',
            'status' => 'pending',
            'priority' => 'medium',
            'due_date' => '2026-05-20',
            'assigned_user_id' => $james->id,
            'project_id' => $apiMigration->id,
            'created_by' => $david->id,
            'updated_by' => $david->id,
            'created_at' => '2026-03-10',
            'updated_at' => '2026-03-10',
        ]);

        Task::create([
            'name' => 'Write migration scripts for breaking changes',
            'description' => 'Create automated migration scripts to help API consumers update their integrations from v2 to v3 with minimal downtime.',
            'status' => 'pending',
            'priority' => 'medium',
            'due_date' => '2026-07-01',
            'assigned_user_id' => $alex->id,
            'project_id' => $apiMigration->id,
            'created_by' => $david->id,
            'updated_by' => $david->id,
            'created_at' => '2026-03-12',
            'updated_at' => '2026-03-12',
        ]);

        // -- Customer Portal tasks --
        Task::create([
            'name' => 'Build subscription management page',
            'description' => 'Create a page where customers can view their current plan, upgrade/downgrade, update billing info, and see next invoice date.',
            'status' => 'in_progress',
            'priority' => 'high',
            'due_date' => '2026-04-25',
            'assigned_user_id' => $elena->id,
            'project_id' => $customerPortal->id,
            'created_by' => $sarah->id,
            'updated_by' => $elena->id,
            'created_at' => '2026-01-25',
            'updated_at' => '2026-03-22',
        ]);

        Task::create([
            'name' => 'Create invoice download feature',
            'description' => 'Generate PDF invoices on demand with company branding. Include itemized charges, tax breakdown, and payment method used.',
            'status' => 'in_progress',
            'priority' => 'medium',
            'due_date' => '2026-05-05',
            'assigned_user_id' => $david->id,
            'project_id' => $customerPortal->id,
            'created_by' => $sarah->id,
            'updated_by' => $david->id,
            'created_at' => '2026-02-15',
            'updated_at' => '2026-03-18',
        ]);

        Task::create([
            'name' => 'Implement support ticket system',
            'description' => 'Build a ticket submission form with category selection, priority, file attachments, and a conversation thread view for follow-ups.',
            'status' => 'pending',
            'priority' => 'high',
            'due_date' => '2026-05-25',
            'assigned_user_id' => $marcus->id,
            'project_id' => $customerPortal->id,
            'created_by' => $sarah->id,
            'updated_by' => $sarah->id,
            'created_at' => '2026-03-01',
            'updated_at' => '2026-03-01',
        ]);

        Task::create([
            'name' => 'Design usage analytics charts',
            'description' => 'Create interactive charts showing API call volume, storage usage, active users, and bandwidth consumption over selectable time ranges.',
            'status' => 'completed',
            'priority' => 'medium',
            'due_date' => '2026-03-20',
            'assigned_user_id' => $olivia->id,
            'project_id' => $customerPortal->id,
            'created_by' => $sarah->id,
            'updated_by' => $olivia->id,
            'created_at' => '2026-02-01',
            'updated_at' => '2026-03-15',
        ]);

        Task::create([
            'name' => 'Add role-based access control',
            'description' => 'Implement RBAC so account admins can invite team members with viewer, editor, or admin roles. Include permission management UI.',
            'status' => 'pending',
            'priority' => 'high',
            'due_date' => '2026-06-10',
            'assigned_user_id' => $marcus->id,
            'project_id' => $customerPortal->id,
            'created_by' => $sarah->id,
            'updated_by' => $sarah->id,
            'created_at' => '2026-03-20',
            'updated_at' => '2026-03-20',
        ]);

        // -- Analytics Dashboard tasks (completed project) --
        Task::create([
            'name' => 'Set up data pipeline from production DB',
            'description' => 'Create a read replica connection and scheduled jobs to aggregate metrics hourly without impacting production performance.',
            'status' => 'completed',
            'priority' => 'high',
            'due_date' => '2025-12-15',
            'assigned_user_id' => $james->id,
            'project_id' => $analyticsDashboard->id,
            'created_by' => $marcus->id,
            'updated_by' => $james->id,
            'created_at' => '2025-11-15',
            'updated_at' => '2025-12-10',
        ]);

        Task::create([
            'name' => 'Build revenue and growth charts',
            'description' => 'Implement line charts for MRR, ARR, and user growth with comparison to previous period. Include drill-down by product line.',
            'status' => 'completed',
            'priority' => 'high',
            'due_date' => '2026-01-15',
            'assigned_user_id' => $elena->id,
            'project_id' => $analyticsDashboard->id,
            'created_by' => $marcus->id,
            'updated_by' => $elena->id,
            'created_at' => '2025-12-01',
            'updated_at' => '2026-01-12',
        ]);

        Task::create([
            'name' => 'Add CSV/PDF export functionality',
            'description' => 'Allow users to export any dashboard view as CSV for raw data or PDF for formatted reports. Include date range selection.',
            'status' => 'completed',
            'priority' => 'medium',
            'due_date' => '2026-02-10',
            'assigned_user_id' => $alex->id,
            'project_id' => $analyticsDashboard->id,
            'created_by' => $marcus->id,
            'updated_by' => $alex->id,
            'created_at' => '2026-01-10',
            'updated_at' => '2026-02-08',
        ]);

        Task::create([
            'name' => 'Implement churn rate tracking',
            'description' => 'Calculate and display monthly churn rate with breakdown by plan tier. Add alerts when churn exceeds defined thresholds.',
            'status' => 'completed',
            'priority' => 'medium',
            'due_date' => '2026-02-20',
            'assigned_user_id' => $david->id,
            'project_id' => $analyticsDashboard->id,
            'created_by' => $marcus->id,
            'updated_by' => $david->id,
            'created_at' => '2026-01-20',
            'updated_at' => '2026-02-18',
        ]);

        // -- E-commerce Integration tasks --
        Task::create([
            'name' => 'Research payment gateway options',
            'description' => 'Compare Stripe, PayPal, and Square for our use case. Evaluate fees, API quality, webhook reliability, and multi-currency support.',
            'status' => 'in_progress',
            'priority' => 'high',
            'due_date' => '2026-04-10',
            'assigned_user_id' => $sarah->id,
            'project_id' => $ecommerce->id,
            'created_by' => $sarah->id,
            'updated_by' => $sarah->id,
            'created_at' => '2026-03-15',
            'updated_at' => '2026-03-28',
        ]);

        Task::create([
            'name' => 'Design product catalog schema',
            'description' => 'Design the database schema for products, variants, categories, pricing tiers, and inventory tracking. Support for digital and physical goods.',
            'status' => 'pending',
            'priority' => 'high',
            'due_date' => '2026-04-25',
            'assigned_user_id' => $david->id,
            'project_id' => $ecommerce->id,
            'created_by' => $sarah->id,
            'updated_by' => $sarah->id,
            'created_at' => '2026-03-18',
            'updated_at' => '2026-03-18',
        ]);

        Task::create([
            'name' => 'Build order tracking webhook handler',
            'description' => 'Create webhook endpoints to receive order status updates from the e-commerce platform. Handle payment confirmed, shipped, delivered, and refunded events.',
            'status' => 'pending',
            'priority' => 'medium',
            'due_date' => '2026-06-01',
            'assigned_user_id' => $james->id,
            'project_id' => $ecommerce->id,
            'created_by' => $sarah->id,
            'updated_by' => $sarah->id,
            'created_at' => '2026-03-20',
            'updated_at' => '2026-03-20',
        ]);

        Task::create([
            'name' => 'Create inventory sync service',
            'description' => 'Build a two-way sync between the e-commerce platform and our existing inventory management system. Handle stock level updates and low-stock alerts.',
            'status' => 'pending',
            'priority' => 'medium',
            'due_date' => '2026-06-20',
            'assigned_user_id' => $alex->id,
            'project_id' => $ecommerce->id,
            'created_by' => $sarah->id,
            'updated_by' => $sarah->id,
            'created_at' => '2026-03-22',
            'updated_at' => '2026-03-22',
        ]);
    }
}
