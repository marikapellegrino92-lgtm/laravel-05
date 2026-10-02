import { Breadcrumbs } from '@/components/breadcrumbs';
import { SidebarTrigger } from '@/components/ui/sidebar';
import type { BreadcrumbItem as BreadcrumbItemType } from '@/types';

export function AppSidebarHeader({
    breadcrumbs = [],
}: {
    breadcrumbs?: BreadcrumbItemType[];
}) {
    return (
        <header className="h-16 gap-2 border-sidebar-border/50 px-6 group-has-data-[collapsible=icon]/sidebar-wrapper:h-12 md:px-4 flex shrink-0 items-center border-b transition-[width,height] ease-linear">
            <div className="gap-2 flex items-center">
                <SidebarTrigger className="-ml-1" />
                <Breadcrumbs breadcrumbs={breadcrumbs} />
            </div>
        </header>
    );
}
