
    /**
     * @file NRE_File.hpp
     * @brief Implementation of IO's API's Object : File
     * @author Louis ABEL
     * @date 11/09/2018
     * @copyright CC-BY-NC-SA
     */

    namespace NRE {
        namespace IO {

            inline File::File(Core::String const& p) : path(p) {
            }

            inline File::File(char const p[]) : path(p) {
            }

            inline Core::String const& File::getPath() const {
                return path;
            }

            inline void File::setPath(Core::String const& p) {
                path = p;
            }

            inline bool File::exist() const {
                if (path.isEmpty()) {
                    return false;
                }

                std::ifstream tmp(path.getCData());
                return tmp.good();
            }

            inline Core::String File::operator +(Core::String const& s) const {
                return path + s;
            }

            inline File File::operator +(File const& f) const {
                return File(path + f.path);
            }

            inline Core::String const& File::toString() const {
                return path;
            }

            inline std::ostream& operator <<(std::ostream& stream, File const& o) {
                return stream << o.toString();
            }
        }
    }
