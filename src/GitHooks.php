<?php

namespace Ams\Composer\GitHooks;

class GitHooks
{
    const SAMPLE = '.sample';

    public static $hookFilename = [
        'applypatch-msg',
        'pre-applypatch',
        'post-applypatch',
        'pre-commit',
        'prepare-commit-msg',
        'commit-msg',
        'post-commit',
        'pre-rebase',
        'post-checkout',
        'post-merge',
        'pre-push',
        'pre-auto-gc',
        'post-rewrite',
    ];
}
