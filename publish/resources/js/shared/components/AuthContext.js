import * as React from "react";

export const AuthContext = React.createContext({
  profile: null,
  setProfile: () => {}
});
