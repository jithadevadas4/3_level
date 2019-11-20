package com.aumento.there_level_atm_security.common_interfaces;

import java.util.ArrayList;

public interface PermissionResultCallback {
    void PermissionGranted(int request_code);

    void PartialPermissionGranted(int request_code, ArrayList<String> granted_permissions);

    void PermissionDenied(int request_code);

    void NeverAskAgain(int request_code);
}