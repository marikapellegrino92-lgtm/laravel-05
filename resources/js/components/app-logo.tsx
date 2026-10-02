import { usePage } from '@inertiajs/react';

import AppLogoIcon from '@/components/app-logo-icon';

export default function AppLogo() {
    const { name } = usePage().props;

    return (
        <>
            <div className="size-8 rounded-md bg-sidebar-primary text-sidebar-primary-foreground flex aspect-square items-center justify-center">
                <AppLogoIcon className="size-5 text-white dark:text-black fill-current" />
            </div>
            <div className="ml-1 text-sm grid flex-1 text-left">
                <span className="mb-0.5 leading-tight font-semibold truncate">
                    {name}
                </span>
            </div>
        </>
    );
}
